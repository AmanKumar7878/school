<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header('Location: login.php');
  exit;
}

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Delete the cookie
setcookie('loggedin', '', time() - 3600, '/');

// Redirect to the login page
header('Location: login.php');
exit;
?>