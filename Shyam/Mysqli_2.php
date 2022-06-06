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
$create_database = 'CREATE database DB';
if (mysqli_query($conn, $create_database)) {
    echo 'Database DB created successfully' . '<br />';
} else {
    echo 'No Database Created';
}
mysqli_close($conn);
$database = 'db';
$conn = mysqli_connect($host, $user, $pass, $database);
if (!$conn) {
    die('Could Not Connect' . mysqli_connect_error());
} else {
    echo 'Connected Successfully' . '<br />';
}
$create_table = 'CREATE TABLE table1(id INT, student_name VARCHAR(20))';
if (mysqli_query($conn, $create_table)) {
    echo 'Table table1 created successfully' . '<br />';
} else {
    echo 'No Table Created';
}
$insert_records = 'INSERT INTO table1(id, student_name) VALUES (1, "Shyam")';
if (mysqli_query($conn, $insert_records)) {
    echo 'New Record Added';
} else {
    echo 'No New Record Added';
}
mysqli_close($conn);
?>