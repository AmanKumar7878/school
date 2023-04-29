<?php

// Connect to the database
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'school';
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
  die('Connection failed: ' . mysqli_connect_error());
}

// Fetch data from the database
$sql = 'SELECT * FROM registration';
$result = mysqli_query($conn, $sql);
// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output data in a table
    echo '<table style="border:3px  solid black;">';
    echo '<tr><th>Name</th><th>Father Name</th><th>Mother Name Name</th><th>Aadhar No.</th><th>E-Mail</th><th>Address</th><th>Mobile No.</th><th>D.O.B</th><th>Class</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<tr>';
      
      echo '<td>' . $row['sname'] . '</td>';
      echo '<td>' . $row['fname'] . '</td>';
      echo '<td>' . $row['mname'] . '</td>';
      echo '<td>' . $row['uidno'] . '</td>';
      echo '<td>' . $row['email'] . '</td>';
      echo '<td>' . $row['adrs'] . '</td>';
      echo '<td>' . $row['mobile'] . '</td>';
      echo '<td>' . $row['dob'] . '</td>';
      echo '<td>' . $row['class'] . '</td>';
      echo '</tr>';
    }
    echo '</td>';
  } else {
    echo 'No results found.';
  }
  
  // Close the database connection
  mysqli_close($conn);
  ?>