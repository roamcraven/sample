<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("Failed to Connect: " .$conn->connect_error);
}

echo "Ayaw hilabti piti jud mo naku!";

?>