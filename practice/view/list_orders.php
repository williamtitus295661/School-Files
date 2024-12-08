<!-- views/list_orders.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Order List</title>
    
</head>



<h1>Order List</h1>
<form method="POST" action="view/add_order.php">
    <label>&nbsp;</label>
    <input button type="submit" value="Add Order"></input button>
        <br>


       


<table border="1">
    <tr>
        <th>ID</th>
        <th>Customer ID</th>
        <th>Order Date</th>
        <th>Order Total</th>
    </tr>
    <?php foreach ($orders as $order): ?>
    <tr>
        <td><?php echo htmlspecialchars($order['order_id']); ?></td>
        <td><?php echo htmlspecialchars($order['customer_id']); ?></td>
        <td><?php echo htmlspecialchars($order['order_date']); ?></td>
        <td><?php echo htmlspecialchars($order['order_total']); ?></td>
    </tr>

    <?php endforeach; ?>
    </table>
    
           
    
   

   
   





</body>
</html>
