<?php
include('db_con.php');

// Fixing the POST variable retrieval
$id = $_POST['product_id'];

// Check if ID is valid
if (empty($id)) {
    echo 'error: id is empty';
    exit;
}

// Running the SQL query
$sql = "DELETE FROM `pos` WHERE `id` = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo 'success';
} else {
    echo 'error: ' . $stmt->error; // Return detailed error information
}

$stmt->close();
$con->close();
?>
    