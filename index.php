<?php

    include "Arrays.php";

    $sore = new Arrays();
    $sore->insertToArray(5 , 8);
    echo $sore->choiseFromArray(5) . "<br>";

    var_dump($sore->sort());



?>