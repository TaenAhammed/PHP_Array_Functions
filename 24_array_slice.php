<?php
$colors = ['Red', 'Blue', 'Green', 'Purple', 'Yellow', 'Orange'];

$result = array_slice($colors, 2);
$result = array_slice($colors, 1, -2);

print_r($result);
