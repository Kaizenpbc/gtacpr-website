<?php
/**
 * Chat / site configuration template.
 *
 * SETUP INSTRUCTIONS:
 *   1. Copy this file to chat-config.php
 *   2. Fill in your real values
 *   3. Never commit chat-config.php — it is in .gitignore
 *
 * chat-config.php is required by chat-api.php for the API key and CORS origin.
 */

// Your Anthropic API key — get one at https://console.anthropic.com
define( 'ANTHROPIC_API_KEY', 'sk-ant-...' );

// The production URL of this WordPress site (no trailing slash).
// The chat endpoint will only accept requests from this origin.
// For local development you can temporarily set this to 'http://localhost'
// or 'http://localhost:8888' etc. — change it back before deploying.
define( 'GTACPR_SITE_URL', 'https://stagegtacpr.kpbc.ca' );
