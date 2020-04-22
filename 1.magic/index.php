<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'Bus.php';
include_once 'Square.php';

$bus = new Bus('Bogdan', 'A45', '2010');

echo $bus->brand . "\n";
var_dump($bus->nnnm);

$bus->year = 2010;

//echo $bus->year . "\n";

$serialized = serialize($bus);
//print_r($serialized);

$unserialized = unserialize($serialized);
//print_r($unserialized);

//echo $unserialized;

$square = new Square(3);
echo $square . "\n";
echo $square->someFunc(5, 0) . "\n";