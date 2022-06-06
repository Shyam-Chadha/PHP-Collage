<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$conn = mysqli_connect($host, $user, $pass);
if (!$conn) {
    die('Could Not Connect' . mysqli_connect_error());
} else {
    echo 'Connected Successfully' . '<br />';
}
$create_database = 'CREATE database library';
if (mysqli_query($conn, $create_database)) {
    echo 'Database library created successfully' . '<br />';
} else {
    echo 'No Database Created';
}
mysqli_close($conn);
$database = 'library';
$conn = mysqli_connect($host, $user, $pass, $database);
if (!$conn) {
    die('Could Not Connect' . mysqli_connect_error());
} else {
    echo 'Connected Successfully' . '<br />';
}
$create_table = 'CREATE TABLE library(id INT, book_name VARCHAR(20))';
if (mysqli_query($conn, $create_table)) {
    echo 'Table library created successfully' . '<br />';
} else {
    echo 'No Table Created';
}
$create_table1 = 'CREATE TABLE author(id INT, author_name VARCHAR(20))';
if (mysqli_query($conn, $create_table1)) {
    echo 'Table author created successfully' . '<br />';
} else {
    echo 'No Table Created';
}
mysqli_close($conn);
?>
