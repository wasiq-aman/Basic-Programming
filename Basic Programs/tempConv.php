<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Temperature Converter</h2>
    <form method="POST">
        <input type="number" name="temperature" id="temperature" required>
        <select name="unit" id="unit">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>
        <button type="submit">Convert</button>
        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $unit = $_POST["unit"];

        if ($unit === "celsius") {
            $converted_temperature = ($temperature * 9/5) + 32;
            echo "<p>$temperature Celsius equals $converted_temperature Fahrenheit</p>";
        } else {
            $converted_temperature = ($temperature - 32) * 5/9;
            echo "<p>$temperature Fahrenheit equals $converted_temperature Celsius</p>";
        }
    }
    ?>
</body>
</html>
