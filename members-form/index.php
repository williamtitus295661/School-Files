<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Form</title>


    <script>
        
        function validateForm() {
            const email = document.getElementById('email').value;
            const name = document.getElementById('name').value;
            const phone = document.getElementById('phone').value;

            if (!validateEmail(email)) {
                alert('Invalid email address');
                return false;
            }
            if (!validateMemberName(name)) {
                alert('Invalid member name');
                return false;
            }
            if (!validateMemberPhone(phone)) {
                alert('Invalid phone number');
                return false;
            }
            return true;
        }

        function validateEmail(email) {
            const pattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return pattern.test(email);
        }

        function validateMemberName(name) {
            const pattern = /^[a-zA-Z\s']+$/;
            return pattern.test(name);
        }

        function validateMemberPhone(phone) {
            const pattern = /^\d{3}-\d{3}-\d{4}$/;
            return pattern.test(phone);
        }
      
    </script>
</head>
<body>
    <!-- <form onsubmit="return validateForm()">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br> -->
        <?php
include 'insert_member-function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $memberName = $_POST['memberName'];
    $memberEmail = $_POST['memberEmail'];
    $memberPhone = $_POST['memberPhone'];

    // Validate form fields (you can add more validation as needed)
    if (!empty($memberName) && !empty($memberEmail) && !empty($memberPhone)) {
        insertMember($memberName, $memberEmail, $memberPhone);
    } else {
        echo "All fields are required.";
    }
}
?>
<!--         
        <input type="submit" value="Submit"> -->
        <form action="insert_member-function.php" method="post">
        Name: <input type="text" name="memberName" required><br>
        Email: <input type="email" name="memberEmail" required><br>
        Phone: <input type="text" name="memberPhone" required><br>
        <input type="submit" value="Submit">
    </form>
        
        

    </form>
</body>
</html>
