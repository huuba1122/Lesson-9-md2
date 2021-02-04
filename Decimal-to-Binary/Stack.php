<?php


class Stack
{
    public $stack;
    public $binary;

    public function __construct()
    {
        $this->stack = array();
        $this ->binary = "";
    }
    function subtractDecimal($number){
        $newArray = array();
        while ($number >0){
            $item = $number%2;
            array_push($newArray, $item);
            $number= floor($number/2);
        }
        return $newArray;
    }
    function convert($number){
        $newList = ($this->subtractDecimal($number));
        $newListLenght = count($newList);
        for ($i = 0; $i < $newListLenght; $i++){
            $item = array_pop($newList);
            array_push($this->stack, $item);
        }
        return $this->stack;
    }
    function showBinary(){
        for ($i = 0; $i < count($this->stack); $i++){
            $this->binary .=$this->stack[$i];
        }
        echo $this->binary;
    }
}


