<?php

$person = [
    'name' => 'Taen',
    'age' => 20,
    'passion' => 'Programming'
];

$arrKeys = array_keys($person);
$arrKeys = array_keys($person, 'Programming');
$arrKeys = array_keys($person, 'not exist');

print_r($arrKeys);
