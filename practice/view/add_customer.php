<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
</head>
<body>
    <h1>Add Customer</h1>
    <form action="index.php?view=add_customer.php&&method=add_customer" method="POST">
      <label for="id">Id:</label>
        <input type="text" id="id" name="id" required>
        <br>

    <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit" value="Add Customer"></button>
    </form>
</body>
</html>

