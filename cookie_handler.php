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


