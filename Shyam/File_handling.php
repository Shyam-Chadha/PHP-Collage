<?php 
 $filename="employee.txt"; 
 $fp = fopen($filename, "w"); 
 fwrite($fp, 'A'); 
 fwrite($fp, 'B'); 
 fclose($fp); 
 if(!copy($filename, "emp2.txt")) { 
 echo "Not Copied"; 
 } else { 
 echo "Copied"; 
 } 
 rename($filename, "emp_old.txt"); 
 $status = unlink("emp_old.txt"); 
 if($status) { 
 echo "Deleted"; 
 } else { 
 echo "Not Deleted"; 
 } 
 ?>