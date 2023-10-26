<?php
// Start the session
session_start();

// Destroy the session and log the user out
session_destroy();

// Redirect the user to the landing page
header("Location: index.php");
exit;
