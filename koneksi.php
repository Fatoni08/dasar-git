<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "php-crud";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if(!$koneksi) {
    die("connection failed:" . mysqli_connect_error());
}
else{
    // echo "connected successfully";
}
?>