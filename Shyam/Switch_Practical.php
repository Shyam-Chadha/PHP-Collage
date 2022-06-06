<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="consumption">Enter number of units used</label>
        <br>
        <br>
        <input type="number" name="units" id="consumption">
        <br>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php

    if ($_POST) {
        $units = $_POST['units'];
        switch ($units) {
            case $units >= 0 && $units <= 200:

                $total = $units * 0.50;
                echo "Total bill is: $total";
                break;

            case $units >= 201 && $units <= 400:
                $total = 100 + $units * 0.65;
                echo "Total bill is: $total";
                break;
            case $units >= 401 && $units <= 600:
                $total = 230 + $units * 0.80;
                echo "Total bill is: $total";
                break;

            default:
                echo "Too many units to bill";
        }
    }
    ?>
</body>

</html>