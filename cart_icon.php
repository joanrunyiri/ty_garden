<?php
// Connect to the database (replace with your own database connection code)
require('connect.php');
// Calculate the total number of items in the cart
$count = 0;

// Query the database to retrieve the cart data
$query = "SELECT COUNT(quantity) AS total FROM cartitems";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Fetch the total quantity from the result
    $row = mysqli_fetch_assoc($result);
    $count = $row['total'];
}

// Display the cart icon with the item count
echo '<li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>' . $count . '</a></li>
';


// Close the database connection
mysqli_close($conn);
?>
