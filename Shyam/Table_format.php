<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2> student Details</h2>
    </div>
    <?php
    if (file_exists('student.dat')) {
        $f = fopen('student.dat', 'r');
        echo "<br>";
        echo "<table border>";
        echo "<tr><td align=center>Roll No</td>";
        echo "<td align=center> Name</td>";
        echo "<td align=center> Maths</td>";
        echo "<td align=center> Science</td>";
        echo "<td align=center> Computer</td>";
        echo "<td align=center> Total</td>";
        while (!feof($f)) {
            $d = fgets($f);
            $s = explode(' ', $d);
            if (!empty($s[0]) && !empty($s[1]) && !empty($s[2]) && !empty($s[3]) && !empty($s[4])) {
                $m1 = $s[2];
                $m2 = $s[3];
                $m3 = $s[4];
                $total = $m1 + $m2 + $m3;
                echo "<tr><td align=center>$s[0]</td>";
                echo "<td align=center> $s[1]</td>";
                echo "<td align=center> $m1</td>";
                echo "<td align=center> $m2</td>";
                echo "<td align=center> $m3</td>";
                echo "<td align=center> $total</td>";
            }
        }
        echo "</table>";
    }
    ?>
</body>
</html>