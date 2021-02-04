<?php
include_once "Queue.php";

$queue = new Queue();
$queue->addPatient("Smith", 5);
$queue->addPatient("Jones", 4);
$queue->addPatient("Fehrenbach", 6);
$queue->addPatient("Brown", 1);
$queue->addPatient("Ingram", 1);
echo "<pre>";
print_r($queue->listData);
$queue->sort();
print_r($queue->dequeue());
print_r($queue->toString());
