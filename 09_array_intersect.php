<?php
$array_one   = [
    'a' => 'Red',
    'b' => 'Blue',
    'c' => 'Green',
    'd' => 'Yellow'
];

$array_two   = [
    'a' => 'Red',
    'f' => 'Black',
    'g' => 'Yellow'
];

$array_three = [
    'p' => 'Red',
    'i' => 'Blue',
    'j' => 'Green'
];

$arrIntersect = array_intersect($array_one, $array_two, $array_three);
print_r($arrIntersect);
