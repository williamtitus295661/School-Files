<?php
// controllers/list_customers.php

function list_customers() {
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "practice");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   
    $sql = "SELECT * FROM customers";
    $result = $conn->query($sql);

   
    $customers = [];
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $customers[] = $row;
        }
    }

    // Close the connection
    $conn->close();

   
    require_once('view\list_customers.php');
  
  

}
?>
