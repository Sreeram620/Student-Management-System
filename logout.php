<?php
session_start();

if($_SERVER['REQUEST_METHOD'] !== 'POST' && $_SERVER['REQUEST_METHOD'] !== 'GET') {
  die("Invalid request method"); // or better error handling
}

// Clear session and logout
$_SESSION = [];
session_destroy();
header("Location: index.html");
exit();
?>
