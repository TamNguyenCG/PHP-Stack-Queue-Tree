<?php


class Queue
{
    public array $queue;
    public int $limit;

    public function __construct(int $limit)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    public function isEmpty(): bool
    {
        return empty($this->queue);
    }

    public function enqueue($value)
    {
        if(count($this->queue) < $this->limit){
            array_unshift($this->queue,$value);
        }else{
            echo "Queue is full";
        }
    }

    public function dequeue()
    {
        if($this->isEmpty()){
            echo "Queue is Empty";
        }else{
            array_pop($this->queue);
        }
    }
}