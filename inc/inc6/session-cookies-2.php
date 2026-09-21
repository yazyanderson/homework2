session_start();  // Resume or create server-side session
$processingOK = 'not yet';
$firstLogin   = 'no';

if (isset($_SESSION['authorized'])) {
    // Path A: Session already existed → user logged in a moment ago
    $processingOK = $_SESSION['authorized'];

} else {
    // Path B: New session → check submitted password
    $password = trim($_POST['password'] ?? '');
    if ($password === 'Test') {
        $processingOK             = 'ok';
        $_SESSION['authorized']   = 'ok';  // ← Written to the SERVER
        $firstLogin               = 'yes';
    }
    // Wrong password: $processingOK stays 'not yet'
}