<?php
// Database connection
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "members";

$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to display data
function displayData($conn) {
    // Query to get data from member table
    $memberQuery = "SELECT * FROM members";
    $memberResult = $conn->query($memberQuery);

    // Query to get data from group table
    $groupQuery = "SELECT * FROM groups";
    $groupResult = $conn->query($groupQuery);

    echo "<h2>Member Table</h2>";
    if ($memberResult->num_rows > 0) {
        echo "<table border='4'><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th></tr>";
        while($row = $memberResult->fetch_assoc()) {
            echo "<tr><td>" . $row["memberID"]. "</td><td>" . $row["memberName"]. "</td><td>" . $row["memberEmail"]. "</td><td>" . $row["memberPhone"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    echo "<h2>Group Table</h2>";
    if ($groupResult->num_rows > 0) {
        echo "<table border='1'><tr><th>ID</th><th>Group Name</th></tr>";
        while($row = $groupResult->fetch_assoc()) {
            echo "<tr><td>" . $row["groupID"]. "</td><td>" . $row["groupName"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}

// Call the function to display data
displayData($conn);

// Close the connection
$conn->close();
?>
