<!-- Working with Directories-->

<?php

//changing to a directory
chdir("./unit4");
//Getting current working directory
echo getcwd();
echo "\n";
//Listing files  in a directory
$list = scandir('.');
print_r($list);

//creating a new directory
if (!in_array("new",scandir('.'))){
    mkdir("new");
}
//opening a directory
$folder = opendir("new");

//reading from a directory 
while($file=readdir($folder)){
    echo $file ."\n";
}

//closing a directory
closedir($folder);