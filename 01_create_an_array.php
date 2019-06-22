<?php

// indexed Array
$names = ['Taen Ahammed', 'Rasel Mia', 'Sumon Mia'];
$length = count($names);
echo ("{$length} \n");

$a = array("hello", 5, 3.3, true, false);
print_r($a);

print_r($names);
unset($names[0]);
print_r($names);

$firstNames = ["Taen", "Rasel", "Sumon"];

for ($i = 0; $i < $length; $i++) {
    echo ("{$firstNames[$i]} \n");
}

// Associative Array
$ages = ['Taen' => 19, 'Rasel' => 20, 'Sumon' => 21];
foreach ($ages as $key => $value) {
    echo ("Name: {$key} Age: {$value} \n");
}

// Multi Dimensional Array
$persons = [
    ['Rasel', 'Blue', '20'],
    ['Sumon', 'Black', '21'],
    ['Taen', 'Black', '19']
];

echo ($persons[2][0] . "\n");

$men = [
    ['Rasel' => 'Average', 'Age' => 20],
    ['Sumon' => 'Good', 'Age' => 21],
    ['Taen' => 'Best', 'Age' => 19]
];

echo $men[2]['Taen'];

echo ("\n" . sizeof($men));
