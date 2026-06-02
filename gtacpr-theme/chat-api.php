<?php
require_once __DIR__ . '/chat-config.php';

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$body = json_decode(file_get_contents('php://input'), true);
$messages = $body['messages'] ?? [];

if (empty($messages)) {
    http_response_code(400);
    echo json_encode(['error' => 'messages array required']);
    exit;
}

$system_prompt = 'You are a friendly and helpful assistant for GTACPR — a WSIB Approved CPR and First Aid training provider in the Greater Toronto Area. Your job is to help potential students find the right course, answer questions, and guide them to book.

ABOUT GTACPR:
- Location: Markham, ON — serving GTA-wide (Markham, Scarborough, North York, Toronto, Mississauga, Brampton, Richmond Hill, Vaughan)
- Phone: 416-723-2571
- Email: kpbcma@gmail.com
- Classes run 7 days a week including evenings and weekends
- In business since 2013
- Google Rating: 4.9/5 based on 60+ reviews

COURSES & PRICING:
1. CPR Level A — $65/person, half-day, 1-year certificate. Basic CPR for adults.
2. CPR Level C / AED — $75/person, half-day, 1-year certificate. CPR for adults, children & infants + AED use. Most common for workplaces.
3. Standard First Aid + CPR-C — $115/person, 2 days, 3-year certificate. Full first aid + CPR. Required for many healthcare and childcare roles.
4. Emergency First Aid + CPR-C — 1 day, 3-year certificate. Covers basic first aid emergencies. Good for general workplaces.
5. Recertification (Blended) — $65/person. Online theory + 4-hour in-person practical. For renewing an existing certificate.
6. ESL CPR Classes — Available in Mandarin, Cantonese, and Greek for newcomers and diverse communities.

GROUP / WORKPLACE TRAINING:
- We come to your workplace — no travel needed for your team
- Group discounts for 5+ people
- Custom scheduling including evenings and weekends
- WSIB Approved and Ontario government compliant
- No cancellation fees with 24 hours notice
- Contact for custom group pricing

CERTIFICATIONS:
- All certificates are WSIB Approved
- Recognized across Canada
- Compliant with Ontario workplace safety requirements
- Digital certificate emailed within 24 hours

COMMON QUESTIONS:
- What to bring: Just yourself and comfortable clothes. All equipment provided.
- Cancellation: Full refund or free reschedule with 48 hours notice (individuals)
- Student discounts available with valid ID
- Group discounts for 3+ people registering together

BOOKING:
- Online booking at the Register page
- Or call 416-723-2571
- Client portal: cpr.kpbc.ca

GUIDELINES:
- Keep responses concise and friendly
- Always guide toward booking when appropriate
- If unsure about specific details, suggest calling 416-723-2571
- Do not make up pricing or dates not listed above
- Respond in the same language the user writes in';

$payload = json_encode([
    'model'      => 'claude-haiku-4-5-20251001',
    'max_tokens' => 500,
    'system'     => $system_prompt,
    'messages'   => $messages
]);

$ch = curl_init('https://api.anthropic.com/v1/messages');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $payload,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'x-api-key: ' . ANTHROPIC_API_KEY,
        'anthropic-version: 2023-06-01'
    ]
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($response === false || $httpCode !== 200) {
    http_response_code(500);
    echo json_encode(['error' => 'Something went wrong. Please call 416-723-2571.']);
    exit;
}

$data = json_decode($response, true);
$reply = $data['content'][0]['text'] ?? 'Sorry, I could not get a response. Please call 416-723-2571.';

echo json_encode(['reply' => $reply]);
