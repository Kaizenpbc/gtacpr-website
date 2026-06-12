<?php
/**
 * GTACPR Chat API Proxy
 * Forwards requests to the Anthropic API. Called directly by chat-widget.js.
 *
 * Security layers:
 *   1. CORS — only accepts requests from GTACPR_SITE_URL (set in chat-config.php)
 *   2. Rate limiting — 10 requests per IP per 60 seconds (file-based, no DB needed)
 *   3. Input validation — JSON structure, role whitelist, 500-char message cap, 20-turn history cap
 *   4. API key guard — refuses to call Anthropic if the key is still a placeholder
 *
 * System prompt is built from inc/business-config.php — one place to update prices/contact.
 */

require_once __DIR__ . '/chat-config.php';
require_once __DIR__ . '/inc/business-config.php';

// ── CORS ──────────────────────────────────────────────────────────────────────
$allowed_origin = defined('GTACPR_SITE_URL') ? GTACPR_SITE_URL : '';
$request_origin = $_SERVER['HTTP_ORIGIN'] ?? '';

header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');
header('Vary: Origin');

if ( ! $allowed_origin ) {
    http_response_code(500);
    echo json_encode(['error' => 'Server misconfiguration: GTACPR_SITE_URL not set.']);
    exit;
}

if ( $request_origin !== $allowed_origin ) {
    http_response_code(403);
    echo json_encode(['error' => 'Forbidden']);
    exit;
}

header('Access-Control-Allow-Origin: ' . $allowed_origin);

if ( $_SERVER['REQUEST_METHOD'] === 'OPTIONS' ) {
    http_response_code(204);
    exit;
}

if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// ── RATE LIMITING ─────────────────────────────────────────────────────────────
// 10 requests per IP per 60-second window, stored in temp files.
function gtacpr_check_rate_limit( $limit = 10, $window = 60 ) {
    $ip   = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
    $file = sys_get_temp_dir() . '/gtacpr_rl_' . md5($ip);
    $now  = time();
    $data = ['count' => 0, 'start' => $now];

    if ( file_exists($file) ) {
        $raw = @json_decode( file_get_contents($file), true );
        if ( is_array($raw) && ( $now - $raw['start'] ) <= $window ) {
            $data = $raw;
        }
    }

    if ( $data['count'] >= $limit ) {
        return false;
    }

    $data['count']++;
    @file_put_contents( $file, json_encode($data), LOCK_EX );
    return true;
}

if ( ! gtacpr_check_rate_limit() ) {
    http_response_code(429);
    echo json_encode(['error' => 'Too many requests. Please try again in a minute.']);
    exit;
}

// ── INPUT VALIDATION ──────────────────────────────────────────────────────────
$body = json_decode( file_get_contents('php://input'), true );

if ( ! is_array($body) || empty($body['messages']) || ! is_array($body['messages']) ) {
    http_response_code(400);
    echo json_encode(['error' => 'messages array required']);
    exit;
}

// Keep last 20 turns, whitelist roles, strip tags, cap at 500 chars each.
$messages = [];
foreach ( array_slice($body['messages'], -20) as $msg ) {
    if ( ! isset($msg['role'], $msg['content']) ) {
        continue;
    }
    if ( ! in_array($msg['role'], ['user', 'assistant'], true) ) {
        continue;
    }
    $content = mb_substr( trim( strip_tags( (string) $msg['content'] ) ), 0, 500 );
    if ( $content === '' ) {
        continue;
    }
    $messages[] = ['role' => $msg['role'], 'content' => $content];
}

if ( empty($messages) ) {
    http_response_code(400);
    echo json_encode(['error' => 'No valid messages provided']);
    exit;
}

// ── SYSTEM PROMPT (built from business-config.php) ───────────────────────────
$cfg = gtacpr_config();

$courses_list = '';
foreach ( $cfg['courses'] as $c ) {
    $price = $c['price'] !== null ? '$' . $c['price'] . '/person' : 'Contact for pricing';
    $cert  = $c['cert_years'] ? $c['cert_years'] . '-year certificate' : '';
    $parts = array_filter( [ $price, $c['duration'], $cert ] );
    $courses_list .= "\n- " . $c['name'] . ': ' . implode( ', ', $parts );
    if ( $c['notes'] ) {
        $courses_list .= '. ' . $c['notes'];
    }
}

$areas      = implode( ', ', $cfg['service_areas'] );
$phone      = $cfg['phone'];
$email      = $cfg['email'];
$portal     = $cfg['portal_url'];
$since      = $cfg['since'];
$rating     = $cfg['rating'];
$reviews    = $cfg['review_count'];
$city       = $cfg['city'];
$province   = $cfg['province'];
$pol        = $cfg['policies'];

$system_prompt = "You are a friendly and helpful assistant for GTACPR — a WSIB Approved CPR and First Aid training provider in the Greater Toronto Area. Your job is to help potential students find the right course, answer questions, and guide them to book.

ABOUT GTACPR:
- Location: {$city}, {$province} — serving {$areas}
- Phone: {$phone}
- Email: {$email}
- Classes run 7 days a week including evenings and weekends
- In business since {$since}
- Google Rating: {$rating}/5 based on {$reviews}+ reviews

COURSES & PRICING:{$courses_list}

GROUP / WORKPLACE TRAINING:
- We come to your workplace — no travel needed for your team
- Group discounts for {$pol['group_min_discount']}+ people
- Custom scheduling including evenings and weekends
- WSIB Approved and Ontario government compliant
- {$pol['cancellation_group']}
- Contact for custom group pricing

CERTIFICATIONS:
- All certificates are WSIB Approved
- Recognized across Canada
- Compliant with Ontario workplace safety requirements
- {$pol['cert_delivery']}

COMMON QUESTIONS:
- What to bring: {$pol['bring_to_class']}
- Cancellation: {$pol['cancellation_individual']} (individuals)
- Student discounts available with valid ID
- Group discounts for {$pol['group_min_discount']}+ people registering together

BOOKING:
- Online booking at the Register page
- Or call {$phone}
- Client portal: {$portal}

GUIDELINES:
- Keep responses concise and friendly
- Always guide toward booking when appropriate
- If unsure about specific details, suggest calling {$phone}
- Do not make up pricing or dates not listed above
- Respond in the same language the user writes in";

// ── API KEY GUARD ─────────────────────────────────────────────────────────────
if (
    ! defined('ANTHROPIC_API_KEY') ||
    in_array( ANTHROPIC_API_KEY, ['your_new_key_here', 'sk-ant-...', ''], true )
) {
    http_response_code(500);
    echo json_encode(['error' => 'Chat is temporarily unavailable. Please call ' . $phone . '.']);
    exit;
}

// ── ANTHROPIC API CALL ────────────────────────────────────────────────────────
$payload = json_encode([
    'model'      => 'claude-haiku-4-5-20251001',
    'max_tokens' => 500,
    'system'     => $system_prompt,
    'messages'   => $messages,
]);

$ch = curl_init('https://api.anthropic.com/v1/messages');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $payload,
    CURLOPT_TIMEOUT        => 15,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'x-api-key: ' . ANTHROPIC_API_KEY,
        'anthropic-version: 2023-06-01',
    ],
]);

$response  = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curl_err  = curl_error($ch);
curl_close($ch);

if ( $response === false || $curl_err ) {
    http_response_code(503);
    echo json_encode(['error' => 'Connection error. Please call ' . $phone . '.']);
    exit;
}

if ( $http_code !== 200 ) {
    http_response_code(500);
    echo json_encode(['error' => 'Could not get a response. Please call ' . $phone . '.']);
    exit;
}

$data  = json_decode($response, true);
$reply = $data['content'][0]['text'] ?? 'Sorry, I could not get a response. Please call ' . $phone . '.';

echo json_encode(['reply' => $reply]);
