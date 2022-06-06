<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    $total = $_SESSION['sub1'] + $_SESSION['sub2'] + $_SESSION['sub3'] +
        $_SESSION['sub4'] + $_SESSION['sub5'] + $_SESSION['sub6'];
    $average = $total / 6;
    echo "Roll No: " . $_SESSION['rollno'] . "<br />";
    echo "Name: " . $_SESSION['name'] . "<br />";
    echo "Class: " . $_SESSION['class'] . "<br />";
    echo "Subject1: " . $_SESSION['sub1'] . "<br />";
    echo "Subject2: " . $_SESSION['sub2'] . "<br />";
    echo "Subject3: " . $_SESSION['sub3'] . "<br />";
    echo "Subject4: " . $_SESSION['sub4'] . "<br />";
    echo "Subject5: " . $_SESSION['sub5'] . "<br />";
    echo "Subject6: " . $_SESSION['sub6'] . "<br />";
    echo "Total: " . $total . "<br />";
    echo "Average: " . $average . "<br />";
    ?>
</body>
</html>