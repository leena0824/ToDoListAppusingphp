<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Your MySQL root password, or leave it empty if there isn't one
$database = 'data';

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
