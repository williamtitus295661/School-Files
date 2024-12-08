<?php
$string = "i love cats, but i also love caterpillars.";
$replacedString = str_replace("cat", "dog", $string);
echo $replacedString;
echo"<br></br>";


$string = "It's a beautiful day!";
$escapedString = addslashes($string);
echo $escapedString;
echo "<br></br>";


$string = "This string has 32 characters.";
$length = strlen($string);
echo "The length of the string is: " . $length +2;
echo "<br></br>";


$string = "The quick brown fox jumps over the lazy dog.";
$start = strpos($string, "lazy");
$substring = substr($string, $start);
echo $substring;
echo "<br></br>";


$string = "The quick brown fox jumps over the lazy dog.";
$position = strpos($string, "lazy");
echo "The position of the word 'lazy' is: " . $position;
echo "<br></br>";


echo date("Y-m-d");
echo "<br></br>";


echo date("Y-m-d H:i:s");
echo "<br></br>";


echo date("F Y");

echo "<br></br>";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'] ?? null;
    $days = $_POST['days'] ?? null;

    if ($date && is_numeric($days)) {
        $datetime = new DateTime($date);
        $datetime->modify("+$days days");
        echo "New date: " . $datetime->format('Y-m-d');
    } else {
        echo "Please enter a valid date and number of days.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Days to Date</title>
</head>
<body>
    <form method="post" action="">
        <label for="date">Enter date (YYYY-MM-DD):</label>
        <input type="date" id="date" name="date" required>
        <br>
        <label for="days">Enter number of days to add:</label>
        <input type="number" id="days" name="days" required>
        <br>
        <input type="submit" value="Add Days">
    </form>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date1 = $_POST['date1'] ?? null;
    $date2 = $_POST['date2'] ?? null;

    if ($date1 && $date2) {
        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);

        echo $interval->format('%y years, %m months, %d days');
    } else {
        echo "Please enter both dates.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Date Difference Calculator</title>
</head>
<body>
    <form method="post" action="">
        <label for="date1">Enter first date (YYYY-MM-DD):</label>
        <input type="date" id="date1" name="date1" required>
        <br>
        <label for="date2">Enter second date (YYYY-MM-DD):</label>
        <input type="date" id="date2" name="date2" required>
        <br>
        <input type="submit" value="Calculate Difference">
    </form>
</body>
</html>







