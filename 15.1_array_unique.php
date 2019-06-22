<?php
$arrOne = ['Taen', 'Munna', 'Rasel'];
$arrTwo = ['Lito', 'Taen', 'Polas'];

$mergedArr1 = array_merge($arrOne, $arrTwo);
print_r($mergedArr1);
print_r(array_unique($mergedArr1));


$arrOne = ['Taen' => 20, 'Munna' => 21, 'Rasel' => 21];
$arrTwo = ['Lito' => 20, 'Taen' => 25, 'Polas' => 23];

$mergedArr2 = array_merge($arrOne, $arrTwo);
print_r($mergedArr2);
print_r(array_unique(($mergedArr2)));
