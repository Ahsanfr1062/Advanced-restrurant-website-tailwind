<?php
$server = "localhost:3307";
$username = "root";
$password = "";
$database = "resturantwebsite";
$conn = mysqli_connect($server, $username, $password,$database);
if(!$conn){
    echo "cannot connnect!";
}
?>