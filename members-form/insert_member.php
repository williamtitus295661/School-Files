<?php
include 'insert_member-function.php';
include 'insert_group.php';
include 'display.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $groupName = $_POST['groupName'];
    $groupID = $_POST['groupID'];

   
      
    } elseif (isset($_POST['modify_data'])) {
        modifyData($_POST['table'], $_POST['id'], $_POST['column'], $_POST['newValue']);
    }
}
 

    // Validate form fields
    
    if (!empty($name) && !empty($email) && !empty($phone)) {
        insertMember($name, $email, $phone);
    if (!empty($groupName) && !empty($groupID) ) {
        insertGroup($groupName, $groupID);
    } else {
        echo "All fields are required.";
    }

    }

?>

