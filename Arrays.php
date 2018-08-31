<?php

    class Arrays{


    public $orgArr;
    public $sortArr;


    public function __construct(){

       $this->orgArr = array_fill(1,20,null);
    }

    public function insertToArray($index , $value){

        if($index < 0 or $index >20){
            retutn -1;
        }else{
            $this->orgArr[$index] = $value;
            echo "Your Number is inserted!" . "<br>";
        }
    }

    public function choiseFromArray($ind){
        if ($ind < 0 or $ind > 20) {
            return -1;
        } else {
            return "Number is : " . $this->orgArr[$ind];
        }
    }

    public function sort(){
        $this->sortArr = $this->orgArr;
        sort($this->sortArr);
        return $this->sortArr;

    }


    }
?>