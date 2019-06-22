<?php
$ages = [
    'Taen' => 19,
    'Rasel' => 20,
    'SumON' => 21,
    'MunNa' => 22
];

print_r($ages);

array_change_key_case($ages, CASE_UPPER);
print_r($ages);

print_r(array_change_key_case($ages, CASE_UPPER));
print_r(array_change_key_case($ages, CASE_LOWER));
