<?php

use Priority\Queue;
include_once "Queue.php";

$queue = new Queue();

$queue->enqueue("Brown",1);
$queue->enqueue("Ingram",1);
$queue->enqueue("Jones",4);
$queue->enqueue("Smith",5);
$queue->enqueue("Fehrenbach",6);

while(!$queue->isEmpty()){
    $queue->peek();
    $queue->dequeue();
}

//echo "<pre>";
//print_r($queue);
//echo "</pre>";

