<?php
function add_order($pdo) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $order_id = filter_input(INPUT_POST,'order_id', FILTER_SANITIZE_NUMBER_INT);
        $customer_id = $_POST['customer_id'];
        $order_date = $_POST['order_date'];
        $order_total = $_POST['order_total'];
        $stmt = $pdo->prepare("INSERT INTO orders (order_id, customer_id, order_date, order_total) VALUES ('$order_id', '$customer_id', '$order_date','$order_total')");
        $stmt->execute([$order_id,$customer_id, $order_date,  $order_total]);
        header('Location: index.php?view=list_orders.php');
        exit();
   
    }
}

?>
  
