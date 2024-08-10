<?php
$count=0;
for ($i = 2; $count < 10; $i++) {
    $flag = true;
    for ($j = $i - 1; $j > 1; $j--) {
        if ($i % $j == 0) {
            $flag = false;
        }
    }
    if ($flag) {
        $count++;
        echo $i . " , ";
    }
}
