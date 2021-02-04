<?php

include_once "Stack.php";

$result = new Stack();
$result->convert(11);
print_r($result->stack);
echo "<br>";
$result->showBinary();