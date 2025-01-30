<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "chat";

$conn = mysqli_connect($servername,$username,$password,$dbName);

if(!$conn){
    die("connection failed");
}

?>