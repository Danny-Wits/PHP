
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form</title>
</head>
<body>
<form action="" method="post">
NAME: <input type="text" name="name"> <br>
MARKS:<input type="number" name="marks"><br>
DOB:<input type="date" name="dob"><br>
<input type="hidden" name="id" value="123"><br>
<input type="submit" name="sub">
</form>

<p>BACK-END</p>
<hr>
<?php
 if(isset($_POST["sub"])){
   echo $_POST['name'];
   echo "<br>";
   echo $_POST['marks'];
   echo "<br>";
   echo $_POST['id'];
   echo "<br>";
   echo $_POST['dob']."<br>";
 }
?>
    
</body>
</html>