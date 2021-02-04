<?php
include_once "ReadingList.php";

$myBooks = new ReadingList();

$myBooks->push('A Dream of Spring');
$myBooks->push('The Winds of Winter');
$myBooks->push('A Dance with Dragons');
$myBooks->push('A Feast for Crows');
$myBooks->push('A Storm of Swords');

$myBooks->pop();
$myBooks->pop();
$myBooks->pop();
//
//$myBooks->pop();
//$myBooks->pop();

//echo "hi".$myBooks->isEmpty();

print_r($myBooks->isEmpty());
//$myBooks->push('A Clash of Kings');
//$myBooks->push('A Game of Thrones');
echo "<pre>";
var_dump($myBooks);
print_r($myBooks->top());