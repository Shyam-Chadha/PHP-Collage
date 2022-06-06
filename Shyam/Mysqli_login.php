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
    <form action="" method="POST">
        <label for="name">Enter User Name</label>
        <input type="text" name="user_name" id="name" />
        <br />
        <br />
        <label for="password">Enter Password </label>
        <input type="number" name="user_password" id="password" />
        <br />
        <br />
        <input type="submit" name="submit" value="Submit" />
    </form>

    <?php
    if ($_POST) {
        $username = $_POST['user_name'];
        $password = $_POST['user_password'];
    }
    $sql = "SELECT * FROM login_info WHERE username = '$username'";
    $retval = mysqli_query($conn, $sql);
    if (mysqli_num_rows($retval) > 0) {
        while ($row = mysqli_fetch_assoc($retval)) {
            if ($password === $row['password']) {
                echo "Welcome!";
                break;
            } else {
                echo "Password does not match";
            }
        }
    }
    mysqli_close($conn);
    ?>
</body>
</html>