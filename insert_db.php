<?php
include('db_con.php');

function tmp_data() {
    global $con;
    $sql = "SELECT * FROM pos ORDER BY id DESC";
    $rs = $con->query($sql);    
    
    while ($row = mysqli_fetch_assoc($rs)) {
        echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['type'] . '</td>
                <td>' . $row['Category'] . '</td>
                <td>' . $row['price'] . '</td>
                <td>
                    <div class="image-container">
                        <img src="' . $row['image'] . '" alt="Product Image">
                    </div>
                </td>
                <td>
                    <button id="" class="btn btn-action btn-update" data-id="' . $row['id'] . '">Update</button>
                    <button id ="btn-delete" class="btn btn-action btn-delete" data-id="' . $row['id'] . '">Delete</button>
                </td>
            </tr>';
    }
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name       = $_POST['product_name'];
    $type       = $_POST['product_type'];
    $category   = $_POST['product_category'];
    $price      = $_POST['product_price'];
    $image      = $_POST['product_image'];

    if (!empty($name) && !empty($type) && !empty($category) && !empty($price) && !empty($image)) {
        $sql = "INSERT INTO `pos` (`name`, `type`, `Category`, `price`, `image`) 
                VALUES ('$name', '$type', '$category', '$price', '$image')";
        $re = $con->query($sql);

        if ($re) {
            echo '<tr>
                    <td>' . $con->insert_id . '</td>
                    <td>' . $name . '</td>
                    <td>' . $type . '</td>
                    <td>' . $category . '</td>
                    <td>' . $price . '</td>
                    <td>
                        <div class="image-container">
                            <img src="' . $image . '" alt="Product Image">
                        </div>
                    </td>
                    <td>
                        <button class="btn btn-action btn-update" data-id="' . $con->insert_id . '">Update</button>
                        <button class="btn btn-action btn-delete" data-id="' . $con->insert_id . '">Delete</button>
                    </td>
                </tr>';
        } else {
            echo 'Error inserting record: ' . $con->error;
        }
    }


}
?>
