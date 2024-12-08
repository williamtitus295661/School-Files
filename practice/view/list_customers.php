
<!DOCTYPE html>
<html>
<head>
    <title>List of Customers</title>
    
</head>
<body>
    <h1>List Customers</h1>
    <form method="POST" action="view\add_customer.php">
    
    <label>&nbsp;</label>
    <input button type="submit" value="Add Customer"></input button>
        <br>
    </form>


    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>last Name</th>
            <th>Email</th>   
           



            
         
        </tr>
        <?php foreach ($customers as $customer): ?>
            
        <tr>
            <td><?php echo htmlspecialchars($customer['id']); ?></td>
            <td><?php echo htmlspecialchars($customer['first_name']); ?></td>
            <td><?php echo htmlspecialchars($customer['last_name']); ?></td>
            <td><?php echo htmlspecialchars($customer['email']); ?></td>
        </tr>
       
        <?php endforeach; ?>
        
    </table>
</body>
</html>

