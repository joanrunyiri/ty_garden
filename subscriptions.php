<?php
// Include the connection.php file
require('connect.php');

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get email address from form input
    $email = $_POST["email"];
    
    // Validate email address
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address.";
    exit();
  }

    // Prepare SQL query to insert email into database
    $sql = "INSERT INTO newsletter (email) VALUES (?)";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        // Add JavaScript code to hide popup here
        header("Location: index.php");
        exit();
    } else {
        echo "Failed to add email to newsletter.";
    }
  
    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>
