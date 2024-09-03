<?php
include('db_con.php');

// Get POST data
$id       = $_POST['product_id'];
$name     = $_POST['product_name'];
$type     = $_POST['product_type'];
$category = $_POST['product_category'];
$price    = $_POST['product_price'];
$image    = $_POST['product_image'];

echo 123;

//Check if all required fields are provided
if (!empty($id) && !empty($name) && !empty($type) && !empty($category) && !empty($price) && !empty($image)) {
    // Prepare the SQL update statement
    $sql = "UPDATE `pos` SET `name`='$name', `type`='$type', `Category`='$category', 
    `price`='$price', `image`='$image' WHERE `id` = $id";
    $re =$con ->query($sql);
    echo 123;
    if ($re) {
        echo 123;
        echo "Product updated successfully!";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
} else {
    echo "All fields are required!";
}

// Close the database connection
mysqli_close($conn);
?>
