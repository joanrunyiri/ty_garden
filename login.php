<!DOCTYPE html>
<?php
session_start();
// require('header.php');
?>
<html>
<head>
  <title>Login</title>
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

    .form-container {
    width: 500px;
    padding: 20px;
    margin: 0 auto;
    background-color: #f2f2f2;
    border-radius: 5px;
    box-sizing: border-box; /* Add this line */
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
    box-sizing: border-box; /* Add this line */
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="image" style="background-image: url('images/4.jpg');">
    </div>
    <div class="form">
      <div class="form-container">
        <h1>Login</h1>
        <?php
        // Check if user is already logged in
        if (isset($_SESSION['user_id'])) {
          header('Location: index.php');
          exit;
        }

        // Check if form was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          // Connect to MySQL database
          require_once('connect.php');

          // Get user input
          $email = $_POST['email'];
          $password = $_POST['password'];

          // Query database for user with matching email
          $query = "SELECT id, email, password FROM users WHERE email = '$email'";
          $result = mysqli_query($conn, $query);

          // Check if user was found and password is correct
          if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row['password'])) {
              // Set session variable and redirect to index page
              setcookie('user_email', $email, time() + (86400 * 30), '/');

              $_SESSION['user_id'] = $row['id'];
              header('Location: index.php');
              exit;
            }
          }

          // If login failed, display error message
          echo '<p>Login failed. Please try again.</p>';
        }
        ?>
        <form action="login.php" method="post">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
          <br><br>
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
          <br><br>
          <input type="submit" value="Log In">
        </form>
        <p>No Account?</p><a href="register.php">Register</a>
      </div>
    </div>
  </div>
</body>
</html>
