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
        <label for="name">Enter Name</label>
        <input type="text" name="user_name" id="name" />
        <br />
        <label for="phone">Enter Phone </label>
        <input type="number" name="user_phone" id="phone" />
        <br />
        <label for="email">Enter Email</label>
        <input type="text" name="user_email" id="email" />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    if ($_POST) {
        if (empty($_POST["user_name"])) {
            $nameErr = "Name is required";
            echo "<br />";
            echo $nameErr;
        } else {
            $name = $_POST["user_name"];
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only alphabets and white space are allowed";
                echo "<br />";
                echo $nameErr;
            }
        }
        if (empty($_POST["user_phone"])) {
            $mobilenoErr = "Mobile no is required";
            echo "<br />";
            echo $mobilenoErr;
        } else {
            $mobileno = $_POST["user_phone"];
            if (!preg_match("/^[0-9]*$/", $mobileno)) {
                $mobilenoErr = "Only numeric value is allowed.";
                echo "<br />";
                echo $mobilenoErr;
            }
            if (strlen($mobileno) != 10) {
                $mobilenoErr = "Mobile no must contain 10 digits.";
                echo "<br />";
                echo $mobilenoErr;
            }
        }
        if (empty($_POST["user_email"])) {
            $emailErr = "Email is required";
            echo "<br />";
            echo $emailErr;
        } else {
            $email = $_POST["user_email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                echo "<br />";
                echo $emailErr;
            }
        }
    }
    ?>
</body>
</html>