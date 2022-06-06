<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$database = 'users';
$conn = mysqli_connect($host, $user, $pass, $database);
if (!$conn) {
    die('Could Not Connect' . mysqli_connect_error());
} else {
    echo 'Connected Successfully' . '<br />';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Enter Name</label>
        <input type="text" name="user_name" id="name" />
        <br />
        <br />
        <label for="phone">Enter Phone </label>
        <input type="number" name="user_phone" id="phone" />
        <br />
        <br />
        <label for="email">Enter Email</label>
        <input type="text" name="user_email" id="email" />
        <br />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>

    <?php
    if ($_POST) {
        //name validation 
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
        //phone validation 
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
            //check mobile no length should not be less and greator than 10 
            if (strlen($mobileno) != 10) {
                $mobilenoErr = "Mobile no must contain 10 digits.";
                echo "<br />";
                echo $mobilenoErr;
            }
        }
        //email validation 
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
        $sql = "INSERT INTO details VALUES ('$name', '$email', '$mobileno')";
        if (mysqli_query($conn, $sql)) {
            echo "Record inserted successfully";
        } else {
            echo "Could not insert record: " . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>