<?php
session_start(); // Start the session

?>
<!DOCTYPE html>
<?php
require('header.php');
require('connect.php');



?>
<html lang="en">
<head>
  <title>Login</title>
</head>


<?php

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
        <main class="mt-5 pt-4">
    <div class="container mt-5">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-6 mb-4">
            <img class="img-fluid" src="' . $product["image"] . '" alt="Colorlib Template">            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">
                <!--Content-->
                <div class="p-4">
                    <div class="mb-3">
                        <h3>' . $product["name"] . '</h3>
                    </div>

                    <p class="lead">
                        
                        <span class="mr-2 price-dc">' . $product["price"] . '</span>
                        
                        
                    </p>

                    <strong><p style="font-size: 20px;">Description</p></strong>

                    <p>' . $product["description"] . '</p>';
                    } else {
                        echo "Product not found.";
                    }
                } else {
                    echo "No product id specified.";
                }
                
                // Don't forget to close the database connection when you're done
                $conn->close();
                ?>

<?php

if (!isset($_SESSION['user_id'])) {
    // User is not logged in
    echo 'Please log in to add items to your cart.';
} else {
    ?>
   <form class="d-flex justify-content-left" method="POST" action="add_to_cart.php">
    <div class="form-outline me-1" style="width: 100px;">
        <input type="number" name="quantity" value="1" class="form-control" />
    </div>
    <input type="hidden" name="product_id" value="<?php echo $product["id"]; ?>" />
    <input type="hidden" name="price" value="<?php echo $product["price"]; ?>" />
    <button class="btn btn-primary ms-1" type="submit">
        Add to cart
        <i class="fas fa-shopping-cart ms-1"></i>
    </button>
</form>

    <?php
}
?>

<!-- Rest of the code for the product page -->

<?php
// Include footer, scripts, or any other necessary HTML after the form
?>
                </div>
                <!--Content-->
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        <hr />

        <!--Grid row-->
        <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-md-6 text-center">
                <h4 class="my-4 h4">Additional information</h4>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus suscipit modi sapiente illo soluta odit voluptates, quibusdam officia. Neque quibusdam quas a quis porro? Molestias illo neque eum in laborum.</p>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/11.jpg" class="img-fluid" alt="" />
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid" alt="" />
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" class="img-fluid" alt="" />
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
</main>
</body>
</html>