<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "emis";

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    // Retrieve form data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $subject = $_POST['subject'];
    $level = $_POST['level'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare("INSERT INTO teachers (firstname, middlename, lastname, subject, level, gender, phone, address, email, password) 
                            VALUES (:firstname, :middlename, :lastname, :subject, :level, :gender, :phone, :address, :email, :password)");
    
    
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully!";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
    ?>
    
