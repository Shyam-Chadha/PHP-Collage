<html>

<head>
    <title>Document</title>
</head>

<body>
    <form method="post">
        Enter the Number of the day:<br>
        <input type="number" name="number">
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    if ($_POST) {
        $day = $_POST['number'];

        switch ($day) {
            case "1":
                echo "It is Monday!";
                break;
            case "2":
                echo "It is Tuesday!";
                break;
            case "3":
                echo "It is Wednesday!";
                break;
            case "4":
                echo "It is Thursday!";
                break;
            case "5":
                echo "It is Friday!";
                break;
            case "6":
                echo "It is Saturday!";
                break;
            case "7":
                echo "It is Sunday!";
                break;
            default:
                echo "Invalid number!";
        }
    }
    ?>
</body>

</html>