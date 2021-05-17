<?php

use Priority\Queue;
include_once "Queue.php";

$queue = new Queue();

$queue->enqueue("Brown",1);
$queue->enqueue("Ingram",1);
$queue->enqueue("Jones",4);
$queue->enqueue("Smith",5);
$queue->enqueue("Fehrenbach",6);

echo "<h1 style='color: red'>List of Patients</h1>";
do{
    $queue->peek();
    $queue->dequeue();
}while(!$queue->isEmpty());

//echo "<pre>";
//print_r($queue);
//echo "</pre>";
