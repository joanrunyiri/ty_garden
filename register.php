<!-- register.html -->
<!DOCTYPE html>
<?php
require('connect.php');
// require('header.php');


?>
<html>
<head>
    <title>User Registration</title>
    <style>
    body, html {
      height: 100%;
      margin: 0;
    }

    .container {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .image {
      flex: 1;
      height: 100%;
      text-align: center;
      background-size: cover;
      background-position: center;
    }

    .form {
      flex: 1;
      text-align: center;
    }
    .form-row {
    display: flex;
    gap: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

    .form-container {
      width: 400px;
      padding: 20px;
      margin: 0 auto;
      background-color: #f2f2f2;
      border-radius: 5px;
      box-sizing: border-box;
    }

    .form h1 {
      margin-bottom: 20px;
    }

    .form input[type="email"],
    .form input[type="password"],
    .form input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }
  </style>

</head>
<body>
<div class="container">
    <div class="image" style="background-image: url('images/4.jpg');">
    </div>
    <div class="form">
      <div class="form-container">
<h1>Sign Up</h1>
<form action="signup_detail.php" method="post">
  <div class="form-row">
    <div class="form-group">
      <label for="first_name">First Name:</label>
      <input type="text" style="width: 75%;
      padding: 10px;
      margin-bottom: 10px;" id="first_name" name="first_name" required>
    </div>
    <div class="form-group">
      <label for="last_name">Last Name:</label>
      <input type="text" style="width: 75%;
      padding: 10px;
      margin-bottom: 10px;"style="width: 100%;
      padding: 10px;
      margin-bottom: 10px;" id="last_name" name="last_name" required>
    </div>
  </div>
  <br><br>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
  </div>
  <br><br>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
  </div>
  <br><br>
  <div class="form-group">
    <label for="confirm-password">Confirm Password:</label>
    <input type="password" id="confirm-password" name="confirm-password" required>
  </div>
  <br><br>
  <input type="submit" value="Sign Up">
</form>
<p>Already have an account?</p><a href="login.php">Login</a>

</body>
</html>
