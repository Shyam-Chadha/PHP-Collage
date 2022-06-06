
    <?php
    $String = "Abcca";
    $temp = $String;
        for($i=strlen($temp)-1;$i>=0;$i--){
             $temp[$i] = $revstr;
        }
        if($String=$revstr){
            echo "Palindrome";
        }
        else{
            echo "Not Palindrome";
        }

?>