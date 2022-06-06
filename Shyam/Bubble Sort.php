<?php
$number= array('100','200','50','49','89');
echo "Before Sorting:";
print_r($number);
for($i=0;$i<count($number);$i++){
    for($j=0;$j<count($number)-1;$j++){
        if ($number[$j]>$number[$j+1]){
            $temp = $number[$j+1];
            $number[$j+1] = $number[$j];
            $number[$j] = $temp;
        }
    }
}
echo"<br>";
echo "After Sorting:";
print_r($number);
?>