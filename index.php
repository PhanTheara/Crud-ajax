<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <title>list products</title>
    
    <!-- Custom CSS -->
    <style>
        body{
           
            background-color:rgb(195, 197, 201);
        }
        img {
            height: 50px;
            width: 50px;
        }
        .image {
            height: 140px;
            width: 130px;
        }
        .form--table {
            width: 100%;
            padding: 50px;
        }
        .table-wrapper {
            overflow-y: auto;
            overflow-x: auto;
            border: 1px solid #ddd;
            border-radius: 6px;
        }
        .table {
            min-width: 1000px;
            table-layout: fixed;
        }
        .form--check {
            padding-top: 2px;
            padding-left: 20px;
            padding-bottom: 50px;
        }
        .btn-submint {
            background: red;
            height: 40px;
            width: 120px;
            border: none;
            color: #fff;
        }
        .header {
            background-color: rgb(104, 96, 125);
            box-shadow: 0px 0px 10px 1.2px rgba(0, 0, 0, 0.7);
            font-family: FiraSans, Verdana, sans-serif;
        }

        h1{
           font-family: "Trirong", serif;
            color: white;
        }
       

        .table-wrapper {
            margin-top: 30px;
            width: 100%;
            padding-left: 10px;
            overflow-x: auto;
            border: 1px solid #ddd;
            border-radius: 6px;
            background-color: #f9f9f9;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .table {
            width: 100%;
            min-width: 1000px;
            border-collapse: separate;
            border-spacing: 0 10px; /* Adds spacing between rows */
        }

        .table th, .table td {
            vertical-align: middle;
            padding: 12px;
            background-color: #fff;
            border: none;
        }

        .table th {
            font-weight: bold;
            text-transform: uppercase;
            background-color: #f1f1f1;
        }

        .table td {
            border-top: 1px solid #eee;
        }

        .image-container {
            width: 80px;
            height: 80px;
            padding: 5px;
            background-color: #eee;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .image-container img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 5px;
        }

        .btn-action {
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
            margin-right: 5px;
        }

        .btn-update {
            background-color: #17a2b8;
            color: white;
            border: none;
        }

        .btn-delete {
            background-color: #dc3545;
            color: white;
            border: none;
        }

        .btn-update:hover {
            background-color: #138496;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }
     
       
    </style>


</head>

<body>
    <div class="container-fluid p-5 header">
        <h1 class="text-center">List products</h1>
        <!-- Button trigger modal -->
        <button type="button" id="add_employee" name="add_employee" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add product
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post"  >
                        <input type="hidden" name="id" id="id">
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="types" class="form-label">Type</label>
                            <input type="text" name="type" id="types" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" name="category" id="category" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="upload-image">Choose Image:</label><br>
                            <input type="file" name="upload-image" id="upload-image" class="form-control mb-3 d-none">
                            <img id="thumbnail" src="https://i.pinimg.com/736x/63/46/40/63464032f1adf22d603f8406ebfea2c9.jpg" alt="" class="image">
                            <input type="hidden" id="url_image" name="url_image">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                            <button type="submit" class="btn btn-primary" id="btn_save" name="btn_save">Save</button>
                            <button type="submit" class="btn btn-primary" id="btn_update" name="btn_update" data-bs-toggle="modal" data-bs-target="#exampleModal" >Update</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- table  -->

    <div class="container table-wrapper">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('db_con.php');
                $sql = "SELECT * FROM `pos` ORDER BY `id` desc";
                 $result = $con->query($sql);
                 while ($row = $result->fetch_assoc()) {
                     echo '<tr>
                             <td>' . $row['id'] . '</td>
                             <td>' . $row['name'] . '</td>
                             <td>' . $row['type'] . '</td>
                             <td>' . $row['Category'] . '</td>
                             <td>' . $row['price'] . ' $</td>
                             <td>
                                 <div class="image-container">
                                     <img src="' . $row['image'] . '" alt="Product Image">
                                 </div>
                             </td>
                             <td>
                                 <button type="button" id  =  "btn-update" class="btn btn-action btn-update">Update</button>
                                 <button type="button" id  = "btn_delete" class="btn btn-action btn-delete">Delete</button>
                             </td>
                         </tr>';
                 }
                ?>
                <!-- Repeat rows as necessary -->
            </tbody>
        </table>
    </div>


</body>
</html>
<script>
    $(document).ready(function() {

// Handle thumbnail click to trigger file input
$('#thumbnail').click(function(){
    $('#upload-image').click();
});

// Handle image upload and display in modal
$('#upload-image').change(function(){
    var form_Data = new FormData();
    var image = $('#upload-image')[0].files;
    form_Data.append('upload-image', image[0]);

    $.ajax({
        url: 'save_image.php',
        method: 'post',
        data: form_Data,
        cache: false,
        processData: false,
        contentType: false,
        success: function(res){
            if (res.includes('image/')) {
                $('#thumbnail').attr('src', res);  // Set the uploaded image as the thumbnail
                $('#url_image').val(res); // Save the image path in the hidden input
                
            } else {
                swal("Upload Failed", res, "error");
            }
        },
        error: function(){
            swal("Error", "An error occurred while uploading the image.", "error");
        }
    });
});

// Insert data into database
$('#btn_save').click(function() {
    var name        = $('#name').val();
    var type        = $('#types').val();
    var category    = $('#category').val();
    var price       = $('#price').val();
    var image       = $('#url_image').val();

    $.ajax({
        url: 'insert_db.php',
        method: 'post',
        data: {
            product_name: name,
            product_type: type,
            product_category: category,
            product_price: price,
            product_image: image
        },
        cache: false,
        success: function(res) {
            $('tbody').prepend(res); // Prepend the new row to the table
            $('#exampleModal').modal('hide'); // Hide the modal after saving
            swal("Success", "Product added successfully!", "success");
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', status, error);
        }
    });
});

// Handle delete button click
$('body').on('click', '.btn-delete', function() {
    var id = $(this).closest('tr').find('td').eq(0).text().trim();
    var row = $(this).closest('tr');

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this record!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: 'delete-db.php',
                method: 'post',
                data: { product_id: id },
                cache: false,
                success: function(response) {
                    if (response.trim() === 'success') {
                        row.remove(); // Remove the row from the table on success
                        swal("Deleted!", "The record has been deleted.", "success");
                    } else {
                        swal("Error!", "An error occurred while deleting the record: " + response, "error");
                    }
                },
                error: function(xhr, status, error) {
                    swal("Error!", "An error occurred: " + status + " - " + error, "error");
                }
            });
        }
    });
});

// Handle modal open for update
$('body').on('click', '.btn-update', function() {
    $('#btn_update').show();
    $('#btn_save').hide();

    var row = $(this).closest('tr');
    var id = row.find('td').eq(0).text().trim();
    var name = row.find('td').eq(1).text().trim();
    var type = row.find('td').eq(2).text().trim();
    var category = row.find('td').eq(3).text().trim();
    var price = row.find('td').eq(4).text().trim().replace(' $', '');
    var image = row.find('td').eq(5).find('img').attr('src');

    // Set the modal form values
    $('#id').val(id);
    $('#name').val(name);
    $('#types').val(type);
    $('#category').val(category);
    $('#price').val(price);
    $('#url_image').val(image);
    $('#thumbnail').attr('src', image);

    // Open the modal
    $('#exampleModal').modal('show');
});


// Handle the update button click
$('#btn_update').click(function() {
    var updatedId       = $('#id').val(); 
    var updatedName     = $('#name').val();
    var updatedType     = $('#types').val();
    var updatedCategory = $('#category').val();
    var updatedPrice    = $('#price').val();
    var updatedImage    = $('#url_image').val();

    $.ajax({
        url: 'update-db.php',
        method: 'POST',
        data: {
            product_id: updatedId,
            product_name: updatedName,
            product_type: updatedType,
            product_category: updatedCategory,
            product_price: updatedPrice,
            product_image: updatedImage,
        },
        cache: false,
        success: function(res) {

            swal("Success", res, "success");
            $('#exampleModal').modal('hide'); // Hide the modal after updating
            
            // Update the table row with new values without refreshing the page
            var row = $('tbody').find('tr').filter(function() {
                return $(this).find('td').eq(0).text().trim() == updatedId;
            });

            row.find('td').eq(1).text(updatedName);
            row.find('td').eq(2).text(updatedType);
            row.find('td').eq(3).text(updatedCategory);
            row.find('td').eq(4).text(updatedPrice + ' $');
            row.find('td').eq(5).find('img').attr('src', updatedImage);
        },
        error: function(xhr, status, error) {
            swal("Error!", "An error occurred while updating the record: " + error, "error");
        }
    });
});

// Open modal for adding a new product
$('#add_employee').click(function() {
    $('#btn_update').hide();
    $('#btn_save').show();
    $('#exampleModal').modal('show');
});

});

</script>