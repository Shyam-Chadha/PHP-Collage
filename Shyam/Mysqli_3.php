<?php include 'conn.php'; ?>
<?php
$create_database = 'CREATE database TEST';
if (mysqli_query($conn, $create_database)) {
    echo 'Database library created successfully' . '<br />';
} else {
    echo 'No Database Created';
}
mysqli_select_db($conn, "TEST");
$create_table = 'CREATE TABLE USER(USERNAME VARCHAR(100) UNIQUE, PASSWORD_HASH 
CHAR(40), PHONE VARCHAR(10))';
if (mysqli_query($conn, $create_table)) {
    echo 'Table user created successfully' . '<br />';
} else {
    echo 'No Table Created';
}
?>