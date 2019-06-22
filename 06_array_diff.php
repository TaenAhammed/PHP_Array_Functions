<?php
$array_one = [
    'a' => 'Red',
    'b' => 'Blue',
    'c' => 'Green',
    'd' => 'Yellow'
];

$array_two = [
    'e' => 'Red',
    'f' => 'Black',
    'g' => 'Purple'
];

$array_three = [
    'h' => 'Green',
    'i' => 'Black',
    'j' => 'Orange'
];

$arrayDiff = array_diff($array_one, $array_two, $array_three);
print_r($arrayDiff);
