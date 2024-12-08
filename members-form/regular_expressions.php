<?php
function validate_email($email) {
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    return preg_match($pattern, $email) === 1;
}

function validate_member_name($name) {
    $pattern = "/^[a-zA-Z\s']+$/";
    return preg_match($pattern, $name) === 1;
}

function validate_member_phone($phone) {
    $pattern = "/^\d{3}-\d{3}-\d{4}$/";
    return preg_match($pattern, $phone) === 1;
}
?>
