<?php
$name = "Danishwer";
$single_quoted='Hello $name';
$double_quoted = " Hello $name";

echo $single_quoted . "\n";
echo $double_quoted;

echo PHP_EOL;
//1.strlen : returns the length of the string /number of characters
echo strlen($name);
echo PHP_EOL;

//2.strrev:  reverses the string 
echo strrev($name);
echo PHP_EOL;

//3.strtoupper: capitalizes the string
echo strtoupper($name);
echo PHP_EOL;

//4.strtolower : turns the sting to lower case 
echo strtolower($name);
echo PHP_EOL;


//5. str_split and explode : divides an string into an array based on a length parameter 
$result=str_split("HELLO",1);
print_r($result);
echo PHP_EOL;
print_r(explode(" ","water is good for health"));
echo PHP_EOL;


//6.str_word_count : returns to number of words in a string 
echo str_word_count($double_quoted);
echo PHP_EOL;

//!7. strpos : finds a substring in a string and returns its positions 

echo strpos("abcdef",'c');
echo PHP_EOL;

//8. replaces a substring by a new one in a string 
echo str_replace('Danish',"Raju","HI Danish");
echo PHP_EOL;
echo str_replace("a","x", "abc");
echo PHP_EOL;

//9.ucwords converts the string into title case
echo ucwords("the cow");
echo PHP_EOL;
//10.trim : removes white spaces form the start and end of a string 
echo trim("  water   ");
echo PHP_EOL;

//11.strcmp(str1,srt2): str1<=>str2  return =0 if str1==str2
echo strcmp("water","water");

echo substr("water",0,4);
