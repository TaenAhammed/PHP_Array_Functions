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
    'a' => 'Black',
    'j' => 'Orange'
];

$arrDiffKey = array_diff_key($array_one, $array_two, $array_three);
print_r($arrDiffKey);
