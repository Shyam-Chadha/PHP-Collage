<?php
$arr = array("36","25","100","89","120","25");
$max = $arr[0];
$n = count($arr);
      for ($i = 1; $i < $n; $i++)
         if ($max < $arr[$i])
            $max = $arr[$i];

echo "Array is ";
print_r($arr);
echo "<br>";
echo "Maximum number is " . $max . ".";

?>