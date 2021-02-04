<?php
class BinaryNode
{
    public $value;
    public $left;
    public $right;

    function __construct($item)
    {
        $this->value = $item;
        $this->left = null;
        $this->right = null;
    }

    function dump(){
        if ($this->left !== null){
            $this->left->dump();
        }
        var_dump($this->value);
        if ($this->right !== null){
            $this->right->dump();
        }
    }
}