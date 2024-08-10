<!-- Sessions in php -->
<?php
//starting sessions
session_start();
//Creating a session variable
$_SESSION['key']=123;
//accessing session variable
echo $_SESSION["key"];

//Deleting one session variable
unset($_SESSION["key"]);

//Destroying a session 
session_destroy();
?>

<!-- Cookies in php -->

<?php
//creating a cookie 
setcookie("key",101,time()+60);
//accessing a cookie
echo $_COOKIE['key'];

//deleting a cookie
setcookie("key",101,time()+0);