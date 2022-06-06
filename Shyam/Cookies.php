<?php 

$cookie_name="user";
$cookie_value="Shyam";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies in PHP</title>
</head>
<body>
    <?php 
    if(isset($_COOKIE['user'])) {
        echo "Cookie is set. Value for cookie '$cookie_name' is: $cookie_value";
    } else {
        echo "Cookie is not set";
    }
    
    ?>
</body>
</html>