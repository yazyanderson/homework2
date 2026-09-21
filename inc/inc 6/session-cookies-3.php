<?php
session_start();            // Loads the session by PHPSESSID cookie
$processingOK = 'not yet';  // Default: assume not authorized

if (isset($_SESSION['authorized'])) {
    $processingOK = $_SESSION['authorized'];
    // ✅ Found 'ok' — written by Lab 2 when you logged in
}

if ($processingOK !== 'ok') {
    // Show failure message and stop
    exit();
}