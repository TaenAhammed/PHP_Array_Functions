<?php
$persons = [
    ['id' => 201, 'first_name' => 'Taen', 'last_name' => 'Ahammed'],
    ['id' => 202, 'first_name' => 'Rasel', 'last_name' => 'Mia'],
    ['id' => 203, 'first_name' => 'Sumon', 'last_name' => 'Mia']
];

$lastNames = array_column($persons, 'last_name', 'id');
print_r($lastNames);

$firstNames = array_column($persons, 'first_name', 'id');
print_r($firstNames);
