<?php
//Important library functions : classwork

//1. ceil (float): rounding of floats
$number = 1.1 ;
$number = ceil($number);
echo $number;
echo PHP_EOL;

//2. count (array): counting the elements in a iterable datatype like array ,object etc
$list = array(1,2,3,5,6 );
echo count($list);
echo PHP_EOL;

//3.Die / exit : termination of script 
//die("message") or exit()

//4.echo (statement/variable): print to standard output
echo "HI MAN ";
echo PHP_EOL;

//5.Empty  (variable): check if a variable is empty  i.e.  equal to 0 / false / null /not set
$var1 = "filled";
$var2 = null;
echo empty($var1)?" empty ":$var1;
echo empty($var2)?" empty ":$var1;
echo PHP_EOL;

//6. file_put_contents(file_address, string to put): writing to a file 
file_put_contents("new.txt","HI BRO");

//7. file_get_contents(file_address) : reading from a file  return a string

echo file_get_contents("new.txt");
echo PHP_EOL;

//8.getenv('name of the variable'): gets information about environment variables like browsers , connection etc
print_r(getenv('username'));
echo PHP_EOL;

//9.header(modifications):change the http header 
//header("Location: #");

//10.htmlentities(string to parse) : outputting html as text (no as markup)
echo htmlentities("<div> water <div>");
echo PHP_EOL;

//11.include() / require() : import a external file (include throws a warning and require throws an error when the file is not found)
//include("file_path");
//require("file_path");

//12. ini_set () : edit system attributes 
//ini_set()
//13.isset(variable) : check is a variable is declared
$var1 = "set";
echo isset($var1)?"SET":" NOT SET";
echo isset($var3)?" SET":" NOT SET";
echo PHP_EOL;


//14. mail(to,subject,message) : used to send a mail using SMTP
$to ="dannywits111@goodmail.com";
$subject = "HI BRO";
$message ="you good?";
//mail($to,$subject,$message);

//15. md5 (string) : used to hash a string with md5 encoding

$password = "water";
$hash = md5($password);
echo $hash;
echo PHP_EOL;

//16. mkdir (pathname) : used to create a directory / folder
if ( !file_exists('new_folder')) {    
    mkdir('new_folder');
}

//17. phpinfo(flag ) : information about php configuration
//phpinfo(32);

//18.preg_match(pattern , string , array_to_store) : used to match expression using patterns

//us a regular expression as a pattern in the first perimeter
preg_match('/@/i',"water@good ",$match);
print_r( $match);

//19.print_r(variable to be printed to stdout) : prints in a human readable form 
$array1 = ["1" =>2,"5"=>"water"];
print_r($array1);

//20.rand(min,max): random number in a range 
echo rand(1,10);
echo PHP_EOL;

//21. str_replace (find , replace , string) : used to replace characters in a string   | return the new string

$message = "Hi Man";
echo str_replace("Hi","Bye",$message);
echo PHP_EOL;

//22.strlen (string ): return the length of the string passed
$string = "water";
echo strlen($string);
echo PHP_EOL;

//23.Trim (string , character to be remove) :remove whitespace or other characters from the beginning and end of a string
$string = "!Hi Man!";
echo trim($string,"!");


echo hash('md5',"water");
