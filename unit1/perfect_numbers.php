<?php

declare(strict_types=1);
function perfection(int $number): bool
{
    return array_sum(factors($number))==$number;
}
function factors(int $number)
{
    $factors_list = [];
    for ($i = 1; $i < $number; $i++) {
        if($number%$i==0){
            array_push($factors_list,$i);
        }
    }
    return array_unique($factors_list);
}
for ($i=0; $i <10000; $i++) { 
   if (perfection($i)){
    echo $i ." ";
   }
}
