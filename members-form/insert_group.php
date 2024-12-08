
<?php
function insertGroup($groupName, $groupID ) {
    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'members');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO groups (groupName, groupID) VALUES (?, ?)");
    $stmt->bind_param("ss", $groupName, $groupID);

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