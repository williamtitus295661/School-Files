<?php
require_once 'Student.php';

$student = new Student("John Doe", 12345, 3.7);

echo "Student Name: " . $student->getName() . "<br>";
echo "Student ID: " . $student->getId() . "<br>";
echo "Student GPA: " . $student->getGpa() . "<br>";
echo "Student Letter Grade: " . $student->getLetterGrade() . "<br>";
?>
<?php
require_once 'Student.php';

$nameErr = $idErr = $gpaErr = "";
$name = $id = $gpa = "";
$student = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid = true;

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
        $valid = false;
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["id"])) {
        $idErr = "ID is required";
        $valid = false;
    } else {
        $id = test_input($_POST["id"]);
    }

    if (empty($_POST["gpa"])) {
        $gpaErr = "GPA is required";
        $valid = false;
    } else {
        $gpa = test_input($_POST["gpa"]);
        if (!is_numeric($gpa) || $gpa < 0 || $gpa > 4) {
            $gpaErr = "GPA must be a number between 0 and 4";
            $valid = false;
        }
    }

    if ($valid) {
        $student = new Student($name, $id, $gpa);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="form-container">
    <h2>Enter Student Information</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        ID: <input type="text" name="id" value="<?php echo $id;?>">
        <span class="error">* <?php echo $idErr;?></span>
        <br><br>
        GPA: <input type="number" step="0.01" name="gpa" value="<?php echo $gpa;?>">
        <span class="error">* <?php echo $gpaErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</div>

<?php
if ($student) {
    echo "<div class='student-info'>";
    echo "<h2>Student Information</h2>";
    echo "Student Name: " . $student->getName() . "<br>";
    echo "Student ID: " . $student->getId() . "<br>";
    echo "Student GPA: " . $student->getGpa() . "<br>";
    echo "Student Letter Grade: " . $student->getLetterGrade() . "<br>";
    echo "</div>";
}
?>

</body>
</html>
