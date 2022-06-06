<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter a number 
        <br>
        <br>
        <input type="number" name="number">  
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    
    if($_POST) {
        $num = $_POST['number'];
        $num = $num * $num;
        echo "Square is:". $num;
    }
    ?>
</body>
</html>