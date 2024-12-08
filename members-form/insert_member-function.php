
<?php
function insertMember($name, $email, $phone) {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'members');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO members (memberName, memberEmail, memberPhone) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $phone);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connections
    $stmt->close();
    $conn->close();
}




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


<!DOCTYPE html>
<html>
<body>

<h2>Member Form</h2>
<form action="insert_member.php" method="post">
<form action="insert_group.php" method="post">
  Name: <input type="text" name="name"><br><br>
  Email: <input type="text" name="email"><br><br>
  Phone: <input type="text" name="phone"><br><br>
  Group Id <input type="text" name="groupID"><br><br>
  Group Name <input type="text" name="groupName"><br><br>
  <input type="submit" value="Submit">

    
      
       
        
    </form>


 


</body>
</html>


