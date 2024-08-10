<?php
// 1.Indexed array : default 0 ++
$num_array = [1,2,3];
print_r($num_array);

// 2. Associative array : key => value 
$person = ["name"=>"Danishwer","Roll_no"=>10];
print_r($person);

// 3. Multi dimensional array : array of arrays 
$person_list = [$person,$num_array];
print_r($person_list);