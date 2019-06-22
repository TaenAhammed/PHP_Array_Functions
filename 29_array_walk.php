<?php
$info = [
    'Taen' => 'Computer Technology',
    'Siddique' => 'Electrical Technology',
    'Rasel' => 'Computer Technology'
];

function studentInfo($value, $key)
{
    echo ("{$key} comes from {$value} department \n");
}

array_walk($info, 'studentInfo');
