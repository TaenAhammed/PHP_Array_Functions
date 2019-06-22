<?php

$input = ["Neo", "Morpheus", "Trinity", "Cypher", "Tank"];

$rand_keys = array_rand($input, 2);
print_r($rand_keys);

$fruits = [
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple'
];

$r_keys = array_rand($fruits, 2);
print_r($r_keys);
