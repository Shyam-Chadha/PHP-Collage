<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
session_destroy();
echo "Successfully destroyed";
?>

</body>
</html>