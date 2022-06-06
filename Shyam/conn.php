<?php 
$host = 'localhost:3306'; 
$user = 'root'; 
$pass = ''; 
$conn = mysqli_connect($host, $user, $pass); 
if(!$conn) { 
 die('Could Not Connect'.mysqli_connect_error()); 
} else { 
 echo 'Connected Successfully'.'<br />'; 
} 
?> 