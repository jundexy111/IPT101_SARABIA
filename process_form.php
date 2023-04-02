<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  // Don't process the form if it wasn't submitted via POST
  die('Error: Only POST requests are allowed.');
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Print the name and email
echo "Name: $firstname $lastname <br>";
echo "Email: $email <br>";

// Count the password length
$password_length = strlen($password);
echo "Password length: $password_length <br>";

// Check if the password and confirm password match
if ($password != $confirm_password) {
  echo "Error: Passwords do not match.";
}
?>