<?php

include_once "Patient.php";

class Queue
{
    public $listData;

    public function __construct(){
        $this->listData = array();
    }

    /** them benh nhan vao danh sach listData   */
    public function addPatient($name, $code){
        $patient = new Patient($name, $code);
        array_push($this->listData, $patient);
    }

    /**  sap xep lai theo thu tu (code tang dan) */
    function sort(){
        function compare($a, $b){
            if ($a->code == $b->code) return 1;
            return ($a->code > $b->code) ? 1 : -1;
        }
        usort($this->listData, "compare");
    }

    /** them danh sach vao queue */
    public function dequeue(){
        $current = array();
        $result = array_shift($this->listData);
        array_push($current,$result);
        return $current;
    }

    function toString(){
        return $this->listData;
    }
}

