<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "emis";

$conn = new mysqli($servername,$username,$password,$database);
if ($conn->connect_error != 0) {
    die("Error in database connection" .$conn->connect_error);
    
}
?>`
