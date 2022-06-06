<?php
if ($_POST["uname"] == "abc@gmail.com" && $_POST["pass"] == "abc123") {

    echo "Welcome " . $_POST['uname'] . "<br />";
    echo "You are " . $_POST['pass'] . " .";
    setcookie("uid", "121212121", time() + 60 * 60);
} else {
    echo " some error pls try again";
    header("Location: /login/login.php", true, 200);
    exit();
}
?>