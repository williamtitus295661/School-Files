<?php
// controllers/list_orders.php

function list_orders() {
    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "practice");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to get all orders
    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);

    // Fetch all orders into an array
    $orders = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $orders[] = $row;
        }
    }

    // Close the connection
    $conn->close();

    // Load the view and pass the orders array
    include('view\list_orders.php');
}
?>