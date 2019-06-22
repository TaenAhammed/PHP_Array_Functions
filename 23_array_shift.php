<?php
$colors = [
    'a' => 'Red',
    'b' => 'Blue',
    'c' => 'Green',
    'd' => 'Purple'
];

$col = [
    '0' => 'Red',
    '1' => 'Blue',
    '2' => 'Green',
    '3' => 'Purple'
];

array_shift($colors);
print_r($colors);

array_shift($col);
print_r($col);
