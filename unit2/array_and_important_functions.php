<?php
#declaration

$array1=array(1,2,3);
//or
$array2=[1,2,3];

#Types
// 1.Indexed array : default 0 ++
$num_array = [1,2,3];
echo "The array of numbers is : ";
echo $num_array[0] .",";
echo $num_array[1] .",";
echo $num_array[2];
//PHP_EOL is for next line EOL=>end of line
echo PHP_EOL;

// 2. Associative array : key => value 
$person = ["name"=>"Danishwer","Roll_no"=>10];
echo "The detail of the person : ". $person['name']. " | ";  
echo  $person['Roll_no'];
echo PHP_EOL;

// 3. Multi dimensional array : array of arrays 
$person_list = [$person,$num_array];
//accessing using [ ] [ ]
echo $person_list[0]['name'];
echo $person_list[1][2];

#Important array functions

//1 . count (array_name): length of the array 
echo PHP_EOL;
echo "count : ";
echo count($array1);

//2. array_combine  (key_array , value_array): uses two arrays on as key and other as value to create a new array
$array1=[1,2,3];
$array2=['a','b','c'] ;
echo PHP_EOL;
echo "array_combine : ";
print_r( array_combine($array1,$array2));

//3. range (min , max , step ): creates array in a range 
echo "range : ";
$array1 = range(1,5,1);
print_r($array1);

//4. array_fill (min,max,value): creates array with same value for all elements 
echo "array_fill : ";
$array1 = array_fill(0,5,3);
print_r($array1);

//5.array_splice(array_name ,starting_index, no_of_elements_to_remove) : returning and removing a portion of array 
echo "array_splice : ";
$array1 = [1,2,3,4,5];
$array2 = array_splice($array1,1,1);
print_r($array1);
print_r($array2);

//6.array_diff(array1 , arrays...) : returns elements that exist in array 1 but not others
$array1 = [1,2,3,4,5];
$array2=[1,2,3];
$array3= array_diff($array1,$array2);
echo "array_diff : ";
print_r($array3); 
//7. in_array(value , array ): return true if value is found in the array otherwise false;
$array1 = [1,2,3,4,5];
echo "in_array  : ";
print_r(in_array(1,$array1)?"true ":"false ");
print_r(in_array(7,$array1)?"true ":"false ");

//8.array_merge(array1, arrays ...) : joins two or more arrays 
$array1= [1,2,3]; 
$array2= [3,4,5]; 
$array3 = array_merge($array1,$array2);
echo "array_merge : ";
print_r($array3);

//9.array_unique(array) : return a array with only unique elements
$array1 = [1,1, 2,2,3,3,3]; 
$array2=array_unique($array1);
echo "array_unique : ";
print_r($array2);

//!10.array_search(value,array):same as in_array but return index on finding 
$array1 = [1,2,3,4,5];
echo"array_search  : ";
echo array_search(3, $array1)?:" false";
echo array_search(8, $array1)?:" false";
echo PHP_EOL;

//11.array_ map(callback_function,array): maps a new array using a callback
$array1 = [1,2,3];
function doubled ($x){
    return 2*$x;
}
$array2 =array_map('doubled',$array1);
echo " array_map  : ";
print_r($array2);

//12.array_reduce(array,callback_function) :returns a single value based on a callback
$array1 = [1,2,3,4];
function sum($prev,$now){
    return $prev + $now;
}
$array2 =array_reduce($array1,'sum');
echo " array_reduce  : ";
print_r($array2);

//!13.sorts : sort =>ascending sort in indexed array  , rsort => descending sort in indexed array  ,
          // asort=> ascending sort in associative array , arsort => descending sort in associative array 
          //usort=>user defined sorting using callback
$array1 = [1,4,2,5,7];
echo " Sorting : ";
sort($array1);
print_r($array1);
rsort($array1);
print_r($array1);

// 14. shuffle (array ) : shuffles array random
$array1 = [1,4,2,5,7];
shuffle($array1);
echo " shuffle : ";
print_r($array1);

//15 . array_walk (array ) : used to traverse an array 

$array1=[1,2,3,"new" , 1.1 ]; 
function display($i){
    echo "$i ,";
}
echo " array_walk : ";
array_walk($array1,'display');


$array2=['a','b','c'] ;

echo implode(" ",$array2);

print_r(array_keys($person));

echo array_key_exists("name",$person);