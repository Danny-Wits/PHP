<!--form using Get Method-->
<!--Combining HTML and PHP-->
<!--Using hidden input tag-->
<!--Capturing form data-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
<form action="" method="get">
NAME: <input type="text" name="name"> <br>
MARKS:<input type="number" name="marks"><br>
<!-- Using Hidden field to send user id . THis info is hidden from the user and can not be modified by them -->
<input type="hidden" name="id" value="123"><br>
<input type="submit" name="sub">
</form>

<p>BACK-END</p>
<hr>
<?php
 if(isset($_GET["sub"])){
   echo "NAME : ". $_GET['name'];
   echo "<br>";
   echo "Marks: ".$_GET['marks'];
   echo "<br>";
   echo "ID: ".$_GET['id'];
   echo "<br>";
  }
?>
    
</body>
</html>