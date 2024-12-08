<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $session_name = $_POST['session_name'];
    $session_value = $_POST['session_value'];
    $_SESSION[$session_name] = $session_value;
    echo "Session variable: $session_name set to: $session_value.";
}
?>
