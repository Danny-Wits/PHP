<?php
namespace Topic1;
//!Data types in PHP

//1. integer
$integer=1;
$marks=100;

//2.Float point number
$float =1.0;
$percentage = 99.99;

//3.1.String
$string="Water";
$name="Danishwer";

//3.2.Heredoc
$heredoc= <<<P
$name wrote this
P;

//4.Null
$null=null;

//5.Boolean
$bool = true;
$online = false;

//6.Array
$array=array(1,2,3,4);
$list=[1,2,3,4];


//7.Object
class test{
    public $property;
    
    function member_function()
{
echo $this->property."<hr>";
}
};

$object=new test();

$object->property="TYPES";
$object->member_function();

//8. Resources
//outside the scope of the chapter


echo gettype($marks)."<br>";
echo gettype($percentage)."<br>";
echo gettype($name)."<br>";
echo gettype($online)."<br>";
echo gettype($list)."<br>";
echo gettype($object)."<br>";
echo "<hr>".$heredoc."<br>";




