<?php
$list=range(1,5);
$list2=array_map(function($x){return 2*$x;},$list);
print_r($list);
print_r($list2);