<?php
$arrOne = ['Taen', 'Munna', 'Rasel'];
$arrTwo = ['Lito', 'Taen', 'Polas'];

$mergedArr = array_merge($arrOne, $arrTwo);
print_r($mergedArr);

$arrOne = ['Taen' => 20, 'Munna' => 21, 'Rasel' => 21];
$arrTwo = ['Lito' => 20, 'Taen' => 25, 'Polas' => 23];

$mergedArr = array_merge($arrOne, $arrTwo);
print_r($mergedArr);
