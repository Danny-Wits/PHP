<?php
$dirpath="new";
$file_path="test.txt";
if(!in_array($dirpath,scandir('.')) ){
    mkdir($dirpath);
}else{
    $fld = dir($dirpath); 
    chdir($dirpath);
    $F= fopen($file_path,'w+');
    for ($i=1; $i <= 100; $i++) { 
        fwrite($F,$i."\n");
    }
    rewind($F);
    $str=fread($F,filesize($file_path));
    var_dump(str_replace("\n"," ",$str));
    fclose($F);
}
chdir('..');
