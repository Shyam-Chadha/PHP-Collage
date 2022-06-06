<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["fname"] = "Shyam";
$_SESSION["lname"] = "Chadha";
echo "Session variables are set.";
?>

</body>
</html>