<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Order</title>
</head>
<body>
    <h1>Add New Order</h1>
    <form action="index.php?controller=add_order.php && method=add_order.php" method="POST">



        <label>Order ID:</label>
        <input type="text" id="order_id" name="order_id" required>
 
  



        <label>Customer ID:</label>
        <input type="text" id="customer_id" name="customer_id" required>
        <br>

        
        <label>Order Date:</label>
        <input type="date" id="order_date" name="order_date" required>
        <br>


        <label>Order Total:</label>
        <input type="number" id="order_total" name="order_total" required> 
        <br>

        <label>&nbsp;</label>
        <button type="submit" value="Add Order"></button>
        <br>
        </form>
</body>
</html>
  
  


    

   

</main>
