<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <form method="POST">
        <input type="number" name="num" placeholder="Enter Number" value="<?php echo isset($_POST['num']) ? $_POST['num'] : ''; ?>" >
        <button type="submit" name="operation" value="Fac">Calculate Factorial</button>
    </form>

    <?php
    if (isset($_POST['operation']) && $_POST['operation'] === 'Fac') {
        if (isset($_POST['num'])) {
            $num = $_POST['num'];
            if ($num < 0) {
                echo "Enter a number greater than or equal to 0";
            } else {
                function factorial($num) {
                    if ($num <= 1) {
                        return 1;
                    } else {
                        return $num * factorial($num - 1);
                    }
                }
                echo "Factorial of $num is " . number_format(factorial($num));
            }
        } else {
            echo "Please enter a number.";
        }
    }
    ?>
</body>
</html>
