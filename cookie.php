
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Form</title>
</head>
<body>
    <form action="cookie_handler.php" method="post">
        <label for="cookie_name">Cookie Name:</label>
        <input type="text" id="cookie_name" name="cookie_name" required><br><br>
        
        <label for="cookie_value">Cookie Value:</label>
        <input type="text" id="cookie_value" name="cookie_value" required><br><br>
        
        <label for="expiry_time">Expiry Time (in seconds):</label>
        <input type="number" id="expiry_time" name="expiry_time" required><br><br>
        
        <input type="submit" value="Set Cookie">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cookie_name = $_POST['cookie_name'];
    $cookie_value = $_POST['cookie_value'];
    $expiry_time = (int)$_POST['expiry_time'];

    // Set the cookie
    setcookie($cookie_name, $cookie_value, time() + $expiry_time, "/");

    // Check if the cookie exists
    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie {$cookie_name} exists. Value:  $_COOKIE[$cookie_name] and will expire in: {$expiry_time} seconds";
    } else {
        echo "Error: Cookie '{$cookie_name}' does not exist.";
    }
}
?>


