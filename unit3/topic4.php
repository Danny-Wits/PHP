<!-- Form validation -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<form method="post">
<!-- Using required attribute to force the user to enter data in all the field before submitting -->
NAME: <input type="text" name="name" required> <br>
EMAIL: <input type="email" name="email" required><br>
WEBSITE: <input type="text" name="url" required><br>
<input type="submit" name="sub">
</form>
   
<!-- Using php code to validate data submitted -->
<?php

//validation function
function validate($input){
   $input= trim($input);
   $input= stripslashes($input);
   $input= htmlspecialchars($input);
   return $input;
}
 if(isset($_POST["sub"])){
   $name= validate($_POST['name']);
   $email= $_POST['email'];
   //filter_var function to validate email and url
   if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "INVALID EMAIL";
    echo PHP_EOL;
   }
   $url= $_POST['url'];
   if(!filter_var($url,FILTER_VALIDATE_URL)){
    echo "INVALID URL";
    echo PHP_EOL;
   }
   $data=[$name,$email,$url];
   print_r($data);
}
?>
</body>
</html>