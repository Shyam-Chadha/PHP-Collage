<html>

<head>
    <title>Document</title>
</head>

<body>
    <form method="post">
        Enter first Number <br>
        <input type="number" name="number">
        <br>
        Enter second number <br>
        <input type="number" name="number1">
        <br>
        <br>
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php
    if ($_POST) {
        $x = $_POST['number'];
        $y = $_POST['number1'];


if ($x > $y) {
  $temp = $x;
  $x = $y;
  $y = $temp;
}

for($i = 1; $i < ($x+1); $i++) {
  if ($x%$i == 0 and $y%$i == 0)
    $hcf = $i;
}

echo "HCF of $x and $y is: $hcf";
    }
?>
</body>
</html>