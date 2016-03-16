<?php
    $headCount=0;
    $flipCount=0;
    while( $headCount < 3 ){
        $coinStatus = rand(0,1);
        $flipCount++;
        if($coinStatus){
            echo "<div class=\"coin\">Face</div>";
            $headCount++;
        }else{
            echo "<div class=\"coin\">Number</div>";
            $headCount = 0;
        }
    }
    echo "I have flip $flipCount";
    unset($headCount);
    unset($flipCount);
?>
