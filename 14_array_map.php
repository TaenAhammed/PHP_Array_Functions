<?php
function doubleNumber($number)
{
    return ($number + $number);
}

$numbers = [1, 2, 3, 4, 5];
$doubledNumbers = array_map('doubleNumber', $numbers);
print_r($doubledNumbers);


function toUpperCase($name)
{
    return strtoupper($name);
}

$names = ['Taen', 'Polas', 'Rasel'];
$upperCasedNames = array_map('toUpperCase', $names);
print_r($upperCasedNames);
