<?php
function by_value($x){
$x++;
}
function by_reference(&$x){
$x++;
}
$x=0;

by_value($x);
echo "After calling by value : ". $x;

by_reference($x);
echo "\nAfter  calling by reference : " . $x;

