<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Input a Number
        <br /><br />
        <input type="number" name="number"> 
        <input type="submit" name="submit" value="Find">
    </form>

    <?php
    if($_POST) {
        $total = 0;
        $num1 = $_POST['number'];
        while($num1 != 0) {
            $rem = $num1 % 10;
            $total = $total + $rem * $rem * $rem;
            $num1 = $num1/10;
        }

        if($num1 === $total) {
            echo " <br> Armstrong Number";
        } else {
             echo " <br> Not a Armstrong number";
        }     
    }
    ?>
</body>
</html>
