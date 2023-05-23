<?php
// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Connect to the database
  require('connect.php');

  // Get product details from the form
  $name = $_POST["name"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $imageURL = $_POST["image"];
  $categoryID = $_POST["category_id"];

  // Prepare SQL query to insert product details into the database
  $sql = "INSERT INTO products (name, description, price, image, category_id) VALUES (?, ?, ?, ?, ?)";

  // Use prepared statement to prevent SQL injection
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssdsi", $name, $description, $price, $imageURL, $categoryID);
  $stmt->execute();

  if ($stmt->affected_rows > 0) {
    echo "Product added successfully!";
  } else {
    echo "Failed to add product.";
  }

  // Close statement and database connection
  $stmt->close();
  $conn->close();
}

?>
