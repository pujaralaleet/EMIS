<?php
  // Database connection configuration
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'emis';

  // Create a connection
  $conn = new mysqli('localhost', 'root',  '', 'emis');

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Retrieve student records from the database
  $sql = "SELECT * FROM register";
  $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Student Records</title>
  <style>
    /* CSS styles... */
  </style>
</head>

<body>
  <h1>Student Records</h1>
  <table border="1">
    <tr>
      <th>Name</th>
      <th>Gender</th>
      <th>Date of Birth</th>
      <th>Father Name</th>
      <th>Nationality</th>
      <th>Address</th>
      <th>Email</th>
      <th>Mobile Number</th>
      <th>Educational Qualification</th>
      <th>Registration ID</th>
      <th>Registration Date</th>
      <th>Certificate Number</th>
      <th>Roll Number</th>
      <th>Register Date</th>
    </tr>
    <?php
      if ($result->num_rows > 0) {

       
        // Output data of each row
        while ($row = $result->fetch_assoc()) {

         
          echo "<tr>";
          echo "<td>".$row["name"]."</td>";
          echo "<td>".$row["sender"]."</td>";
          echo "<td>".$row["Date_of_Birth"]."</td>";
          echo "<td>".$row["Father_Name"]."</td>";
          echo "<td>".$row["Nationality"]."</td>";
          echo "<td>".$row["Address"]."</td>";
          echo "<td>".$row["E_mail"]."</td>";
          echo "<td>".$row["Mobile_Number"]."</td>";
          echo "<td>".$row["Educational_Qualification"]."</td>";
          echo "<td>".$row["Registration_id"]."</td>";
          echo "<td>".$row["Registration_Date"]."</td>";
          echo "<td>".$row["Certificate_Number"]."</td>";
          echo "<td>".$row["Roll_Number"]."</td>";
          echo "<td>".$row["Register_of_date"]."</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='14'>No records found.</td></tr>";
      }
    ?>
  </table>

  <?php
    // Close the connection
    $conn->close();
  ?>
</body>

</html>
