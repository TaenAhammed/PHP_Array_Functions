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

$arrIntersectAssoc = array_intersect_assoc($array_one, $array_two, $array_three);
print_r($arrIntersectAssoc);
