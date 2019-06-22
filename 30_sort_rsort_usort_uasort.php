<?php

$fruits = ["lemon", "orange", "banana", "apple"];
sort($fruits);
rsort($fruits);
print_r($fruits);

$numbers = [3, 2, 5, 6, 1];

function compare($a, $b)
{
    if ($a == $b)
        return 0;
    return ($a > $b) ? 1 : -1;
}

usort($numbers, 'compare');
print_r($numbers);

$nums = ['a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4];
uasort($nums, 'compare');
print_r($nums);
