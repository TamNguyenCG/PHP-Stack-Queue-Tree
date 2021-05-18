<?php
namespace ReverseArray;

class Stack
{
    public array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function push($data)
    {
        array_push($this->stack,$data);
    }

    public function pop()
    {
        if(!$this->isEmpty()) {
            array_pop($this->stack);
        }else{
            echo "Stack is Empty";
        }
    }
}