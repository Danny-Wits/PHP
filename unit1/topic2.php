<?php
//!Constants and  Flow control statements(conditional,Loops,Jumps)

//constants 
//1.using define
define("GRAVITY", 9.8);
//2.using const keyword
const e = 2.3;

echo GRAVITY . "<br>";
echo e . "<br>";

//CONTROL STATEMENTS

//1.Conditionals/Selectors

// if , if else, elseif ladder 

$condition = true;
if ($condition) {
    echo "true";
} elseif ($condition) {
    echo "false";
} else {
    echo "false";
}
echo "<br>";
//2.Iterating statements / Loops

//1.while loop

while ($condition) {
    echo "Iterated ~by WHILE" . "<br>";
    $condition = false;
}

//2.do-while loop
do {
    echo "Iterated  ~by Do WHILE" . "<br>";
}while($condition);

//3. for loop
for ($i=1; $i <= 10; $i++) { 
    echo $i . ",";
} echo " ~by FOR" . "<br>";
//4. for each loop

$list = array(1,2,2,3,4,100=>1000);
foreach($list as $i){
    printf("%x ",$i);
}
print("~by FOR-EACH")

?>