<?php

    class Arrays{


    public $lenght = 20;
    public $orgArr;


    public function __construct(){
        //make array with fixed size
        $this->orgArr = new SplFixedArray($this->lenght);
    }

    public function insertToArray($index , $value){
            $this->orgArr[$index] = $value;
    
    }

    public function choiseFromArray($ind){
        if ($ind < 0 or $ind > $this->lenght) {
            return -1;
        } else {
            return "Number is : " . $this->orgArr[$ind];
        }
    }

    public function sort(){
        $this->sortArr = (array)$this->orgArr;
        sort($this->sortArr);
        return $this->sortArr;

    }


    }
?>