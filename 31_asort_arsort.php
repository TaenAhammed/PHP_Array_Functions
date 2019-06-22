<?php
$names = [
    'Taen' => 20,
    'Sumon' => 30,
    'Rasel' => 15,
    'Munna' => 40
];

asort($names);
arsort($names);
print_r($names);

$names = [
    'a' => 'Taen',
    'b' => 'Sumon',
    'd' => 'Munna',
    'c' => 'Rasel'
];

asort($names);
arsort($names);
print_r($names);
