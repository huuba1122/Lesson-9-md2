<?php
include_once "QueueList.php";


$queue = new QueueList();
$queue->enqueue('start');
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue("end");
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
echo $queue->isEmpty();
echo "<pre>";
var_dump($queue);
//var_dump($queue->dequeue());
