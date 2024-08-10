<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post" >
<label for="name">Name</label>
<input type="text" class="input" name="name"  id="name" required>
<br>
<label for="password">Password</label>
<input type="password" class="input" name="password"  id="password" required>
<br>
<input type="submit" value="LOG IN" name="L" >
<input type="submit" value="SIGN IN" name="S">

</form>
<?php
# Check of redirects
if(isset($_GET['already_exist']))echo "<br>"."USERNAME ALREADY EXISTS";
if(isset($_GET['invalid_login']))echo "<br>"."PLEASE LOGIN AGAIN ";
if(isset($_GET['does_not_exist']))echo "<br>"."ACCOUNT DOES NOT EXIST <br> PLEASE SIGN IN FIRST";
if(isset($_GET['incorrect_password']))echo "<br>"."INCORRECT PASSWORD";
?>
</body>
</html>