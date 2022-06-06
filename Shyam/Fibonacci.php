<?php
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "<h3>Fibonacci series for first 10 numbers: </h3>";  
echo "<br>";  
echo $n1;
echo "<br>";
echo $n2;  
echo "<br>";
while ($num < 8 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' '. "<br>";  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num + 1;  
}  
?>