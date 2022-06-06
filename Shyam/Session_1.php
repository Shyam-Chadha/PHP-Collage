<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Session_1.php" method="post">
        <label for="roll_no">Enter Roll No.</label>
        <input type="text" name="rollno" id="roll_no" />
        <br />
        <br />
        <label for="s_name">Enter Name</label>
        <input type="text" name="name" id="s_name" />
        <br />
        <br />
        <label for="s_class">Enter Class</label>
        <input type="text" name="class" id="s_class" />
        <br />
        <br />
        <input type="submit" name="submit" value="Submit Data" />
    </form>
    <a href="Session_2.php">Next Page</a>
    <?php
    if ($_POST) {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['rollno'] = $_POST['rollno'];
        $_SESSION['class'] = $_POST['class'];
    }
    ?>
</body>
</html>