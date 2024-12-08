<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Debugging Challenge</title>
</head>
<body>
  <h1>Even or Odd</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="number">Enter a number:</label>
    <input type="text" name="number" id="number">
    <br>
    <input type="submit" name="submit" value="Check">
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $number = isset($_POST["number"]) ? $_POST["number"] : 0;
      
      if (!is_numeric($number)) {
        echo "Please enter a valid number.";
      } else {
        $number = (int)$number; // Convert to integer
        if ($number % 2 == 0) {
          echo "$number is an even number.";
        } else {
          echo "$number is an odd number.";
        }
      }
    }
  ?>
</body>
</html>

