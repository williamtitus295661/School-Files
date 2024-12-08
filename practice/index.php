<?php



$host = "localhost";
$user = "root";
$password = "";
$dbname = "practice";

// Establish database connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get controller and method from URL (modify as needed)
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'list_customers';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';


// Construct controller file path
$controller_file = "controllers\list_customers.php" . $controller ."controllers\list_customers.php";

// Check if controller file exists
if (file_exists($controller_file)) {
  require_once($controller_file);



  // Call the requested method on the controller
  if (function_exists($method)) {
    $result = $method();
    echo $result;
  } else {
    echo "Method '$method' not found in controller '$controller'";
  }
}
include('controllers\list_customers.php');
include('controllers\add_customer.php');
include('controllers\list_orders.php');
include('controllers\add_order.php');

if (isset($_POST['action'])) {
switch ($_POST['action']) {
case 'list_customers':
list_customers();
break;
case 'add_customer';
add_customers();
break;
case 'list_orders';
list_orders();
break;
case 'add_order';
add_orders();
break;
default;
echo "Action not recognized!";
break;
    }
} else {
    // Default action
   




    list_customers();

    list_orders();

}






   

  

  


    
  




$conn->close();

// index.php

// Include customer and order controllers

// Define routing based on request
?>






   

  

  


    
  


