<?php

    include "Arrays.php";

    $sore = new Arrays();

    for($i = 0 ; $i < $sore->lenght ; $i++){
         $sore->insertToArray($i, mt_rand(1,100));
    }

    
    echo $sore->choiseFromArray(1) . "<br>";

    for($i=0 ; $i< count($sore->sort()) ; $i++){

        echo $sore->sort()[$i] . "_";
    }



?>