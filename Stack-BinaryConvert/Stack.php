<?php

namespace Binary;

class Stack
{
    public array $stack;
    public function __construct()
    {
        $this->stack = [];
    }

    public function push($number): array
    {
        while($number>1){
            $sub = $number % 2;
            array_unshift($this->stack,$sub);
            $number = $number / 2;
        }
        return $this->stack;
    }
}