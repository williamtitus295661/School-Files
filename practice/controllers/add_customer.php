<?php
function add_customer($pdo) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $stmt = $pdo->prepare("INSERT INTO customers (id,first_name,last_name, email) VALUES ('$id', '$first_name', '$last_name','$email')");
        $stmt->execute([$id,$first_name, $last_name,  $email]);
        header('Location: index.php?view=add_customer.php');
        exit();
   
    }
}

?>
