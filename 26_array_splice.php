<?php

$arr = ['red', 'green', 'blue', 'yellow'];
array_splice($arr, 2);
print_r($arr);

$arr = ['red', 'green', 'blue', 'yellow', 'purple'];
array_splice($arr, 2, -1);
print_r($arr);

$arr = ['red', 'green', 'blue', 'pink', 'yellow', 'purple'];
array_splice($arr, 2, -2, [1, 2, 3]);
print_r($arr);
