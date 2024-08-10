<?php
function delete_2(&$x){
    unset($x[1]);
}
$array = array(1,2,3);
print_r($array);
delete_2($array);
print_r($array);


