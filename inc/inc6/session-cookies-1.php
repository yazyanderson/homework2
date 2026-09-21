<?php
// ── Read existing cookies from the browser ──────────────
$lasttime   = isset($_COOKIE['LAST_VISIT'])   ? $_COOKIE['LAST_VISIT']        : '';
$visitcount = isset($_COOKIE['VISIT_NUMBER']) ? (int)$_COOKIE['VISIT_NUMBER']  : 0;
$firstvisit = isset($_COOKIE['FIRST_VISIT'])  ? $_COOKIE['FIRST_VISIT']       : '';

// ── Build new timestamp ─────────────────────────────────
$LAST_VISIT = date('l, F j, Y') . ' at ' . date('g:i A');

// ── Write updated cookies (MUST be before DOCTYPE) ──────
setcookie('LAST_VISIT',   $LAST_VISIT,           time() + 3600 * 24 * 14);
setcookie('VISIT_NUMBER', $visitcount + 1,         time() + 3600 * 24 * 14);

// ── Step 8: Record the very FIRST visit date ─────────────
if ($firstvisit === '') {                              // Only write once
    setcookie('FIRST_VISIT', $LAST_VISIT, time() + 3600 * 24 * 365); // 1 year
} else {
    setcookie('FIRST_VISIT', $firstvisit, time() + 3600 * 24 * 365); // Refresh
}

setcookie('FIRST_VISIT', $firstvisit, time() + 3600 * 24 * 365);