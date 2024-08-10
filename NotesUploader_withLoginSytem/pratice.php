<?php

function increment_value($x){
    $x++;
   echo "r :". $x;
}
function increment_reference(&$x){
    $x++;
    echo "r :".$x;
}
$a=1;
$b=1;



function sum_v ($x,$y){
    $sum = $x+$y;
    echo $sum;
    return $sum;
}



function sum_r (&$x,&$y){
    $sum = $x+$y;
    echo $sum;
    return $sum;
}
$a=1;
$b=2;


#array

//1. Indexed array |for loop

//0-> x 1->y .....

$arr1= array('a','b','c','d','e');

for ($i=0; $i < count($arr1); $i++) { 
 
 echo $arr1[$i];
 echo PHP_EOL;

}




//2. Associative array | for each

//key -> value .....

$arr2= array("name"=>"Danishwer","Roll_no"=>2);

foreach($arr2 as $key => $value ){
    echo "$key=>$value";
    echo "\n";
}


//3. Multi dimensional array | double for loop

$arr3= [$arr1,$arr2];


$arr = range(1,10);

print_r($arr);