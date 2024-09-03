<?php
 
$host = 'localhost'; // or your database host
$user = 'root';      // your database username
$password = '';      // your database password
$dbname = 'php9_10'; // your database name

$con = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>


