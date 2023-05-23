<?php
// Handle logout process

// Clear user-related cookies and session
setcookie('user_email', '', time() - 3600, '/');
session_start();
session_destroy();

// Redirect to the home page
header("Location: index.php");
exit();
?>
