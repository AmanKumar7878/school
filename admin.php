<?php
session_start();
$username="aman";
$password="1234";
// Verify the user's credentials
if ($_POST['username'] == $username && $_POST['password'] == $password) {
  // Store the user's login information in the session
  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $_POST['username'];
  
  // Set a cookie to remember the user's login state
  setcookie('loggedin', 'true', time() + (86400 * 30), '/');
  
  // Redirect to the homepage
  header('Location: adminupdate.php');
} else {
  // If the credentials are incorrect, display an error message
  echo 'Incorrect username or password. Please try again.';
}
?>