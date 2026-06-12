<?php
/**
 * GTACPR — Single source of truth for all business data.
 *
 * Used by: functions.php, header.php, footer.php, chat-api.php
 *
 * To change a price, phone number, or any business fact — edit this file only.
 * No WordPress dependencies; safe to include from chat-api.php (called directly).
 */

function gtacpr_config( $key = null ) {
    static $cfg = null;
    if ( $cfg === null ) {
        $cfg = [
            // ── Identity ──────────────────────────────────────────────────────
            'name'         => 'GTA CPR',
            'tagline'      => 'WSIB Approved CPR & First Aid Training',
            'since'        => '2013',

            // ── Contact ───────────────────────────────────────────────────────
            'phone'        => '416-723-2571',
            'phone_raw'    => '4167232571',       // for tel: href
            'email'        => 'kpbcma@gmail.com',
            'portal_url'   => 'https://cpr.kpbc.ca',

            // ── Address ───────────────────────────────────────────────────────
            'address'      => '46 Sunnyside Hill Road',
            'city'         => 'Markham',
            'province'     => 'ON',
            'postal_code'  => 'L6B 0X5',
            'country'      => 'CA',

            // ── Service area ──────────────────────────────────────────────────
            'service_areas' => [
                'Markham', 'Scarborough', 'North York', 'Toronto',
                'Mississauga', 'Brampton', 'Richmond Hill', 'Vaughan',
            ],

            // ── Social proof ──────────────────────────────────────────────────
            'rating'       => '4.9',
            'review_count' => '60',

            // ── Hours ─────────────────────────────────────────────────────────
            'hours'        => 'Mo-Su 09:00-17:00',

            // ── Languages ─────────────────────────────────────────────────────
            'languages'    => ['Mandarin', 'Cantonese', 'Greek'],

            // ── Courses ───────────────────────────────────────────────────────
            // price: integer (dollars) or null = contact for pricing
            // cert_years: integer or null = N/A
            'courses' => [
                [
                    'id'         => 'cpr-a',
                    'name'       => 'CPR Level A',
                    'price'      => 65,
                    'duration'   => 'Half-day',
                    'cert_years' => 1,
                    'notes'      => 'Basic CPR for adults.',
                ],
                [
                    'id'         => 'cpr-c',
                    'name'       => 'CPR Level C / AED',
                    'price'      => 75,
                    'duration'   => 'Half-day',
                    'cert_years' => 1,
                    'notes'      => 'CPR for adults, children & infants + AED use. Most common for workplaces.',
                ],
                [
                    'id'         => 'sfa',
                    'name'       => 'Standard First Aid + CPR-C',
                    'price'      => 115,
                    'duration'   => '2 days',
                    'cert_years' => 3,
                    'notes'      => 'Full first aid + CPR. Required for many healthcare and childcare roles.',
                ],
                [
                    'id'         => 'efa',
                    'name'       => 'Emergency First Aid + CPR-C',
                    'price'      => null,
                    'duration'   => '1 day',
                    'cert_years' => 3,
                    'notes'      => 'Covers basic first aid emergencies. Good for general workplaces.',
                ],
                [
                    'id'         => 'recert',
                    'name'       => 'Recertification (Blended)',
                    'price'      => 65,
                    'duration'   => 'Online + 4-hour in-person',
                    'cert_years' => null,
                    'notes'      => 'Online theory + 4-hour in-person practical. For renewing an existing certificate.',
                ],
                [
                    'id'         => 'esl',
                    'name'       => 'ESL CPR Classes',
                    'price'      => null,
                    'duration'   => null,
                    'cert_years' => null,
                    'notes'      => 'Available in Mandarin, Cantonese, and Greek for newcomers and diverse communities.',
                ],
            ],

            // ── Policies ──────────────────────────────────────────────────────
            'policies' => [
                'cancellation_individual' => '48 hours notice for full refund or free reschedule',
                'cancellation_group'      => 'No cancellation fees with 24 hours notice',
                'bring_to_class'          => 'Just yourself and comfortable clothes. All equipment provided.',
                'cert_delivery'           => 'Digital certificate emailed within 24 hours',
                'group_min_discount'      => 3,
            ],

            // ── Form integrations ─────────────────────────────────────────────
            // Sign up at formspree.io, create two forms, paste the IDs here.
            'formspree_contact' => 'mnjyopek',
            'formspree_group'   => 'xzdqkrpr',
        ];
    }
    return $key !== null ? ( $cfg[ $key ] ?? null ) : $cfg;
}

/** Formatted phone — e.g. "416-723-2571" */
function gtacpr_phone() {
    return gtacpr_config('phone');
}

/** Raw digits for tel: href — e.g. "4167232571" */
function gtacpr_phone_raw() {
    return gtacpr_config('phone_raw');
}

/** Email address */
function gtacpr_email() {
    return gtacpr_config('email');
}

/** Full one-line address string */
function gtacpr_address() {
    $c = gtacpr_config();
    return $c['address'] . ', ' . $c['city'] . ', ' . $c['province'] . ' ' . $c['postal_code'];
}

/** Client portal URL */
function gtacpr_portal_url() {
    return gtacpr_config('portal_url');
}
