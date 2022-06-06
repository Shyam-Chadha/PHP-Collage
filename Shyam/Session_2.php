<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="Session_2.php" method="post">
        <label for="sub_1">Enter Marks for Subject 1</label>
        <input type="number" name="sub1" id="sub_1" />
        <br />
        <br />
        <label for="sub_2">Enter Marks for Subject 2</label>
        <input type="number" name="sub2" id="sub_2" />
        <br />
        <br />
        <label for="sub_3">Enter Marks for Subject 3</label>
        <input type="number" name="sub3" id="sub_3" />
        <br />
        <br />
        <label for="sub_4">Enter Marks for Subject 4</label>
        <input type="number" name="sub4" id="sub_4" />
        <br />
        <br />
        <label for="sub_5">Enter Marks for Subject 5</label>
        <input type="number" name="sub5" id="sub_5" />
        <br />
        <br />
        <label for="sub_6">Enter Marks for Subject 6</label>
        <input type="number" name="sub6" id="sub_6" />
        <br />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <a href="Session_3.php">Next Page</a>
    <?php
    if ($_POST) {
        $_SESSION["sub1"] = $_POST["sub1"];
        $_SESSION['sub2'] = $_POST['sub2'];
        $_SESSION['sub3'] = $_POST['sub3'];
        $_SESSION['sub4'] = $_POST['sub4'];
        $_SESSION['sub5'] = $_POST['sub5'];
        $_SESSION['sub6'] = $_POST['sub6'];
    }
    ?>
</body>
</html>