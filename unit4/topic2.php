<!-- Working with Files in PHP -->
<?php
chdir("unit4/new");

//1.opening a file :

$file=fopen("new.txt",'w+');


//2.writing to a file :
fwrite($file,"Water");
//or
file_put_contents("new.txt"," is good.",FILE_APPEND);

//4.re-setting a pointer of a file :
rewind($file);


//3.reading from a file :

echo fread($file,filesize("new.txt"));
echo "\n";
//or
readfile("new.txt");
echo "\n";
//or 
echo file_get_contents("new.txt");

//4. Closing a file

fclose($file);

//5. Deleting a File 
unlink("new.txt");

//6.copy file 
copy("x.txt","y.txt");

//7. Rename a file 
rename("y.txt","z.txt");