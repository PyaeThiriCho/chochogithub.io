<?php
    function divide($a,$b){
        if($b == 0){
            throw new Exception("Division by zero");
        }
        return $a / $b;
    }

    try{
        echo divide(10,2);
    }
    catch(Exception $e){
        echo 'Caught exception:', $e->getMessage(), "\n";
    }

    ?>