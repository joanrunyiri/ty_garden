<!DOCTYPE html>
<html lang="en">
<?php
require('connect.php');

// Check if the id parameter is provided in the URL
if(isset($_GET['id'])) {
    // Retrieve the product id from the URL
    $productId = $_GET['id'];
    
    // Perform a query to retrieve the product with the specified id
    $sql = "SELECT * FROM products WHERE id = $productId";
    $result = $conn->query($sql);
    
    // Check if the product exists
    if ($result->num_rows > 0) {
        // Fetch the product details
        $product = $result->fetch_assoc();
        
        // Display the product details
        echo '
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <img class="img-fluid" src="' . $product["image"] . '" alt="Colorlib Template">
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3>' . $product["name"] . '</h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">
                                    <span class="mr-2 price-dc">' . $product["price"] . '</span>
                                    <!-- <span class="price-sale">$80.00</span> -->
                                </p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    } else {
        echo "Product not found.";
    }
} else {
    echo "No product id specified.";
}

// Don't forget to close the database connection when you're done
$conn->close();
?>
</body>
</html>