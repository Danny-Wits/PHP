<?php

function factorial($x){

    //base condition 

    if ($x==0)return 1;
  
    // recursive part  

    return $x * factorial($x-1);
}

 

echo PHP_EOL; 

function sum_of_first_n_number($x){

// base condition 
if($x==0)return $x;

//recursive part
return $x + sum_of_first_n_number($x-1);

}


for ($i=10; true; $i*=10){
    echo sum_of_first_n_number($i);
    echo PHP_EOL; 
}