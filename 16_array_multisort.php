<?php
$arrOne = [4, 3, 1, 2];
$arrTwo = [9, 6, 7, 8];

array_multisort($arrOne, $arrTwo);
print_r($arrOne);
print_r($arrTwo);

$arr1 = ['Mat', 'Cup', 'Cap', 'Price', 'Pat', 'Ant', 'Apple'];
$arr2 = ['Banana', 'Cow', 'Mango', 'Men', 'Mom', 'Zoo', 'Zinc'];

array_multisort($arr1, SORT_ASC, $arr2, SORT_DESC);

print_r($arr1);
print_r($arr2);
