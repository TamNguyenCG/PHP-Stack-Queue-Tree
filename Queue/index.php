<?php


include_once "Queue.php";

$queue = new Queue(10);

$queue->enqueue("Start");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue("End");

$queue->dequeue();
$queue->dequeue();
var_dump($queue);
