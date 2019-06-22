<?php
$fruits = [
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple'
];

while ($fruit_name = current($fruits)) {
    if ($fruit_name === 'apple') {
        echo (key($fruits) . "\n");
    }
    next($fruits);
}

$names = [
    'Taen' => 20,
    'Rasel' => 30,
    'Munna' => 5,
    'Sumon' => 35,
    'Imran' => 50
];

ksort($names);
krsort($names);
print_r($names);
