<?php
$integer = 1;
$float = 1.1;
$string = "TEXT";
$array=array(1,2,3);
class new_class{
};
$object = new new_class;
$resource= fopen("text.txt",'r');


var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($array);
var_dump($object);
var_dump($resource);