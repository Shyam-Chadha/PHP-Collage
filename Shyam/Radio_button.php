<!DOCTYPE html>
<html lang="en">
<body>
    <form action="" method="post">
        <input type="checkbox" name="Nissan" id="c1" value="Nissan">
        <label for="c1">Nissan</label>
        <br />
        <input type="checkbox" name="Toyota" id="c1" value="Toyota">
        <label for="c1">Toyota</label>
        <br />
        <input type="checkbox" name="Mitsubishi" id="c1" value="Mitsubishi">
        <label for="c1">Mitsubishi</label>
        <br />
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if ($_POST) {
        if (filter_has_var(INPUT_POST, 'Nissan')) {
            echo "Nissan is your choice";
        } elseif (filter_has_var(INPUT_POST, 'Toyota')) {
            echo "Toyota is your choice";
        } else {
            echo "Mitsubishi is your choice";
        }
    }
    ?>
</body>
</html>