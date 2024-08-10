<?php
$i=2;
$j=14;
$k=10;
echo "The greatest number is : ";
if($i>$j){
    if($i>=$k){
        echo $i;
    }
    else{
        echo $k;
    }
}else{
    if($j>=$k){
        echo $j;
    }
    else{
        echo $k;
    }
}