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
    'c' => 'Red',
    'i' => 'Blue',
    'j' => 'Green'
];

$arrIntersectKey = array_intersect_key($array_one, $array_two, $array_three);

print_r($arrIntersectKey);
