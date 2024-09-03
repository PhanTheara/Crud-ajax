<?php
if (isset($_FILES['upload-image'])) {
    $image      = $_FILES['upload-image']['name'];
    $tmp_image  = $_FILES['upload-image']['tmp_name'];
    
    $imageName  = date('dmyhis') . '_' . $image;
    $uploadPath = './image/' . $imageName;

    if (move_uploaded_file($tmp_image, $uploadPath)) {
        echo $uploadPath;
    } else {
        echo "Error uploading the image.";
    }
} else {
    echo "No file uploaded.";
}
?>
