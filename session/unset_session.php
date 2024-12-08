<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $session_var = $_POST['session_var'];
    unset($_SESSION[$session_var]);
    echo "Session variable $session_var has been unset.";
}
?>
