<?php
    $arr = array(1, 2, 3, 4, 5);
    $x = 5;
    $value = false;
	if (count($arr) === 0){
        $value == false;
    }
	$low = 0;
	$high = count($arr) - 1;
	
	while ($low <= $high) {
		$mid = floor(($low + $high) / 2);
		if($arr[$mid] == $x) {
			$value =true;
		}

		if ($x < $arr[$mid]) {
			$high = $mid -1;
		}
		else {
			$low = $mid + 1;
		}
	}
    if(isset($value)){
        echo "Element Found";
    }
    else{
        echo "Element not found";
    }
?>
