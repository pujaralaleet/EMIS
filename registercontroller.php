<?php
$name = $_POST['y_name'];
$sender = $_POST['gender'];
$Date_of_Birth = $_POST['dob'];
$Father_Name = $_POST['f_name'];
$Nationality = $_POST['nationality'];
$Address = $_POST['address'];
$E_mail = $_POST['e_mail'];
$Mobile_Number = $_POST['a_r_claimed'];
$Educational_Qualification = $_POST['edu_quali'];
$Upload_Image = $_POST['image'];
$Registration_id = $_POST['reg_id'];
$Registration_Date = $_POST['tra_date'];
$Certificate_Number = $_POST['fee_paid'];
$Roll_Number = $_POST['agency'];
$Register_of_date = $_POST['m_payment'];

// Include the database connection file
include "databaseconnection.php";

// Perform database operations using the connection ($conn) here
// For example, you can insert the form data into a table:
$sql = "INSERT INTO register(name, sender, Date_of_Birth, Father_Name, Nationality, Address, E_mail, Mobile_Number, Educational_Qualification, Upload_Image, Registration_id, Registration_Date, Certificate_Number, Roll_Number, Register_of_date)
        VALUES ('$name', '$sender', '$Date_of_Birth', '$Father_Name', '$Nationality', '$Address', '$E_mail', '$Mobile_Number','$Educational_Qualification', '$Upload_Image', '$Registration_id', '$Registration_Date', '$Certificate_Number', '$Roll_Number', '$Register_of_date')";


if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
?>

