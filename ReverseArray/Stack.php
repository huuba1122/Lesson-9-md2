<?php

class Stack
{
    public $firstArray;
    public $lastArray;

    public function __construct()
    {
        $this->firstArray = array();
        $this->lastArray = array();
    }

    public function push($item)
    {
            array_push($this->firstArray, $item);
    }

    public function pop()
    {
        //lay mot phan tu o cuoi mang firstArray
        if (count($this->firstArray) > 0){
            $item = array_pop($this->firstArray);

            // them phan tu vua lay ra cua firstArray vao lastArray
            array_push($this->lastArray, $item);
        }else{
//            throw new Exception("mang rong");
        }

    }

    /**
     * @return array
     */
    public function getFirstArray()
    {
        return $this->firstArray;
    }

    /**
     * @return array
     */
    public function getLastArray()
    {
        return $this->lastArray;
    }
}
