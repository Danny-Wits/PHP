<?php
function increment($x){
    $x+=2;
    return $x;
}

$number = 10;
echo $number;
echo PHP_EOL;
$number =increment($number);
echo $number;

