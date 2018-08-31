<?php

    class Arrays{


    public $arr;


    public function __construct(){

       $this->arr = array_fill(1,20,null);
    }

    public function insertToArray($index , $value){

        if($index < 0 or $index >20){
            retutn -1;
        }else{
            $this->arr[$index] = $value;
            echo "Your Number is inserted!" . "<br>";
        }
    }

    public function choiseFromArray($ind){
        if ($ind < 0 or $ind > 20) {
            return -1;
        } else {
            return "Number is : " . $this->arr[$ind];
        }
    }


    }
?>