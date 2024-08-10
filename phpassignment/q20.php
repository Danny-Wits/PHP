<?php
session_start();
$_SESSION['ID']=12321;
setcookie('USER','Danishwer',time() + 36000);
print_r($_SESSION);
print_r($_COOKIE);

