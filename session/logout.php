<?php
session_start(); // Start the session

// Destroy the session
session_unset();
session_destroy();

// Redirect to home page
header("Location: home.php");
exit();
?>
