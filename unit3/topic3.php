<!--Request Variable : An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
<form action="" method="get">
NAME: <input type="text" name="name"> <br>
</form>
<p>Press ENTER to submit</p>

<form action="" method="post">
Password: <input type="text" name="password"> <br>
</form>
<p>Press ENTER to submit</p>
<hr>
<?php
  print_r($_REQUEST)?> 
</body>
</html>