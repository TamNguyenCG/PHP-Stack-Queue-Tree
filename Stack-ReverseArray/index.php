<?php
use ReverseArray\Stack;

include_once "Stack.php";
$stack = new Stack();

$stack->push(5);
$stack->push(4);
$stack->push(3);
$stack->push(2);
$stack->push(1);

while(!$stack->isEmpty())
{
    $stack->pop();
}

echo "<pre>";
var_dump($stack);