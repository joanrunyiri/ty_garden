<?php
session_start();
require('connect.php');

// Retrieve the product ID, quantity, and price from the form
$quantity = $_POST['quantity'];
$product_id = $_POST['product_id'];
$price = $_POST['price'];

// Prepare the SQL statement
$sql = "INSERT INTO cartitems (cart_id, product_id, quantity,  price, created_at, updated_at)
        VALUES (?, ?, ?, ?, NOW(), NOW())";

// Create a prepared statement
$stmt = $conn->prepare($sql);

// Bind the parameters
$stmt->bind_param("iiid", $cart_id, $product_id, $quantity, $price);

// Execute the statement
$stmt->execute();


// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    header('Location:cart.php');
    exit();
} else {
    echo "Failed ";
}

// Close the statement and database connection
$stmt->close();
$conn->close();
?>

