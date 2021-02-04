<?php

include_once "Element.php";

class QueueList
{
    private $front;
    private $back;

    public function isEmpty()
    {
        return $this->front == null;
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
//        var_dump($oldBack);
//        echo "<br>";
        $this->back = new Element();
//        var_dump($this->back);
//        echo "<br>";
        $this->back->value = $value;
//        var_dump($this->back);
//        echo "<br>";
        if ($this->isEmpty())
        {
//            var_dump($this->isEmpty());
//            echo "<br>";
            $this->front = $this->back;
//            var_dump($this->front);
//            echo".";
//            echo "<br>";
        }else{
            $oldBack->next = $this->back;
//            var_dump($oldBack->next);
//            echo ":";
//            echo "<br>";
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()){
            return null;
        }
        else{
            $removedValue = $this->front->value;
            $this->front = $this->front->next;
            return $removedValue;
        }
    }
}