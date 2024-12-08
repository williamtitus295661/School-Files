<?php
// Define the function to list customers
function list_customers() {
    // Assuming you have a database connection established
    global $db;

    // Query to retrieve all customers
    $query = "SELECT * FROM customers";
    $result = mysqli_query($db, $query);

    // Initialize an array to store customers
    $customers = array();

    // Fetch all customers and add them to the array
    while ($row = mysqli_fetch_assoc($result)) {
        $customers[] = $row;
    }

    // Return the array of customers
    return $customers;
}

// Call the function to get the customers
$customers = list_customers();

// Load the view and pass the customers array to it
include 'views/list_customers.php';
?>
