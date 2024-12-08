<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Variable Form</title>
</head>
<body>
    <h2>Set Session Variable</h2>
    <form action="set_session.php" method="post">
        <label for="session_name">Session Variable Name:</label>
        <input type="text" id="session_name" name="session_name" required><br><br>
        <label for="session_value">Session Variable Value:</label>
        <input type="text" id="session_value" name="session_value" required><br><br>
        <input type="submit" value="Set Session Variable">
    </form>

    <h2>Unset Session Variable</h2>
    <form action="unset_session.php" method="post">
        <label for="session_var">Select Session Variable to Unset:</label>
        <select id="session_var" name="session_var">
            <?php
            session_start();
            foreach ($_SESSION as $key => $value) {
                echo "<option value=\"$key\">$key</option>";
            }
            ?>
        </select><br><br>
        <input type="submit" value="Unset Session Variable">
    </form>
</body>
</html>
