<?php
        $notLoseMatchCount=0;
        $matchState = 0;
        do{
            $matchState=rand(0,2);
            if($matchState != 0){
                $notLoseMatchCount++;   
            }
        }while($matchState != 0);
        switch ($notLoseMatchCount){
            case 0:
                echo "You are loser";
                break;
            case 1:
                echo "There was 1 not-lost match";
                break;
            default:
                echo "There were $notLoseMatchCount matches";
                break;
        }
        unset($notLoseMatchCount);
        unset($matchState);
?>
