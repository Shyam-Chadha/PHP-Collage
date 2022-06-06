<html>
<head>
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter a String 
        <br>
        <input type="text" name="input">
        <input type="submit" value="Submit">
    </form>

    <?php
        if($_POST){
            $input = $_POST['input'];
            echo "Length of string is ". strlen($input) .". <br>";
            echo "Reverse of string is ". strrev($input). ". <br>";
            echo "Hash is" . md5($input) . ". <br>";
            echo strtoupper($input). "<br>";

        }
    ?>
</body>
</html>