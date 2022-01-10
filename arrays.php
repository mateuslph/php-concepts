<?php
    $idadeList = [21, 23, 19, 25, 30, 41, 18, 23];  // um jeito de fazer arrays

        for($i=0; $i < count($idadeList); $i++){
            echo $idadeList[$i] . PHP_EOL;
        }

    $idadeList = array(21, 23, 19, 25, 30, 41, 18, 23);  // outro jeito de fazer arrays

        for($i=0; $i < count($idadeList); $i++){
            echo $idadeList[$i] . PHP_EOL;
    }
?>