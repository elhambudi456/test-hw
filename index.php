<?php
    function loopingCondition($number){
        for($i = 1 ; $i <= $number ; $i ++){
            if($i % 3 == 0 && $i % 5 == 0){
                echo 'TigaLima';
                echo '<br>';
            }if($i % 3 == 0){
                echo 'Tiga';
                echo '<br>';
            }else if($i % 5 == 0){
                echo 'Lima';
                echo '<br>';
            }else{
                echo $i;
                echo '<br>';
            }
        }
    }

    loopingCondition(100);
?>