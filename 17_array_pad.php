<?php
$colors = ['Red', 'Blue', 'Green'];

$result = array_pad($colors, 10, 'Yellow');
print_r($result);

$output = array_pad($colors, -5, 'Pink');
print_r($output);
