
<?php
// Connect to the database
require('connect.php');

// Assuming you have a database connection established

// Retrieve the category ID from the URL
$category_id = $_GET['id'];

// Perform a query to retrieve products for the specified category
$sql = "SELECT * FROM products WHERE category_id = $category_id";
$result = $conn->query($sql);

// Include the header
require('header.php');

?>

<body>
    <!-- Your HTML code here -->

    <?php
    // Check if there are any products found for the category
    if ($result->num_rows > 0) {
        // Loop through the products and display them
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="product.php?id=' . $row["id"] . '" class="img-prod">
                            <img class="img-fluid" src="' . $row["image"] . '" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="product.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h3>
                            <div class="d-flex">
                                <div class="pricing">
                                    <p class="price"><span>$' . $row["price"] . '</span></p>
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
                                    <a href="#" class="heart d-flex justify-content-center align-items-center">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        }
    } else {
        echo '<p>No products found for this category.</p>';
    }

    // Don't forget to close the database connection when you're done
    $conn->close();
    ?>

    <!-- Rest of your HTML code -->
    <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
