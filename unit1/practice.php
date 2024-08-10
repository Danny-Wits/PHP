<?php

$array = ['a'=>10,1,3,4 ];

foreach ($array as $key=>$value){
    echo $key." => ".$value."\n";
}
$i=-2;
while ( ++$i<=0){
echo $i;
echo PHP_EOL;
}

do {
    echo "this will be printed at least once.\n";
}while(false);

for ($i=0; print($i.", "),++$i<=10;){}

X:
echo"goto ";
goto Y;
goto X;

Y:

$i=-1;
switch($i){

    case 1: echo "true"; break;
    case 0: echo "false"; break;
    case -1: echo "true"; break;
    default: echo "Default";
}

for($i=0; ++$i<10;){

    if($i%2==0){
        continue;
    }
    echo $i." ,";
}