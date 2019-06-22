<?php

$arrOne = ['a' => 'Red', 'b' => 'Green'];
$arrTwo = ['a' => 'Blue', 'b' => 'Yellow'];

$result = array_replace($arrOne, $arrTwo);
print_r($result);

$arrOn = ['a' => 'Red', 'Green'];
$arrTw = ['a' => 'Blue', 'b' => 'Yellow'];

$res = array_replace($arrOn, $arrTw);
print_r($res);

$one = ['Red', 'Green'];
$two = ['Blue', 'Yellow'];
$three = ['Purple', 'Orange'];

$r = array_replace($one, $two, $three);
print_r($r);
