<?php
$persons = ['name' => 'Taen', 'age' => 19, 'eye' => 'black'];
$key = 'name';

if (array_key_exists($key, $persons))
    echo ("{$key} is exists. \n");
else
    echo ("{$key} doesn't exist. \n");

$colors = ['red', 'green', 'blue'];
$key = 5;

if (array_key_exists($key, $colors))
    echo ("{$key} is exist \n");
else
    echo ("{$key} doesn't exist. \n");
