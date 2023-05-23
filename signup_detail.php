<?php

// Connect to database
require_once "connect.php";
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Get form input values
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm-password"];

  // Validate form input
  if ($password != $confirm_password) {
    echo "Passwords do not match.";
  } else {

    // Hash password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database
    $sql = "INSERT INTO users (first_name, last_name, email, password)
    VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";

    if (mysqli_query($conn, $sql)) {
      $email = $_POST['email'];

  // Set a cookie to store the email
    setcookie('user_email', $email, time() + (86400 * 30), '/');
      echo "Sign up successful!";
      header("Location: index.php");
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }
}

mysqli_close($conn);

?>
