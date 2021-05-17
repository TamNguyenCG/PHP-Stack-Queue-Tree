<?php


class Stack
{
    public array $stack;
    public int $limit;

    public function __construct(int $limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function isEmpty(): bool
    {
        return empty($this->stack);
    }

    public function push($item): void
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            echo 'Stack is full';
        }
    }

    public function pop()
    {
        if($this->isEmpty()){
            echo 'Stack is Empty';
        }else{
            return array_shift($this->stack);
        }
    }

    public function top()
    {
        return current($this->stack);
    }
}