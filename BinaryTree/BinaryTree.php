<?php
include_once "BinaryNode.php";

class BinaryTree
{
    protected $root;
    public function __construct()
    {
        $this->root = null;
    }

    public function isEmpty()
    {
        return $this->root === null;
    }
    function insert($item)
    {
        $node = new BinaryNode($item);
        if ($this->isEmpty()){
            $this->root = $node;
        }
        else{
            $this->insertNode($node,$this->root);
        }
    }

    protected function insertNode($node, &$subtree)
    {
        if ($subtree === null){
            $subtree = $node;
        }
        else{
            if ($node->value > $subtree->value){
                $this->insertNode($node, $subtree->right);
            }else if($node->value < $subtree->value){
                $this->insertNode($node, $subtree->left);
            }else{

            }
        }
    }

    public function traverse(){
        $this->root->dump();
    }
}