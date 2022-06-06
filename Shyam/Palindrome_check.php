<?php 
 function Palindrome($MyString) { 
 $revString = strrev($MyString); 
 if ($revString == $MyString){ 
 echo $MyString." is a Palindrome string."; 
 } else { 
 echo $MyString." is not a Palindrome string."; 
 } 
} 
Palindrome("Shyam"); 
Palindrome("malayalam"); 
?>