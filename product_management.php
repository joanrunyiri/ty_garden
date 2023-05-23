<!DOCTYPE html>
<html>
<head>
    <title>Product Management</title>
</head>
<body>
    <h1>Product Management</h1>

    <!-- Add Product Form -->
    <h2>Add Product</h2>
    <form action="add_product.php" method="post">
        <label for="image">Product Image URL:</label>
        <input type="url" id="image" name="image" required>
        <br><br>
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="description">Product Description:</label>
        <input type="text" id="desc" name="description" required>
        <br><br>

        <label for="price">Product Price:</label>
        <input type="number" id="price" name="price" required>
        <br><br>
        <label for="description">Category:</label>

        <select name="category_id">
        <option value="">Select a category</option>
        <?php
          require('connect.php');

        // Fetch the categories from the database
        $sql = "SELECT * FROM categories";
        $result = $conn->query($sql);

        // Loop through the categories and generate the options
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
        }
        $conn->close();

        ?>
        </select>

        <input type="submit" value="Add Product">
        </form>

    <!-- Display Products -->
</body>
</html>
