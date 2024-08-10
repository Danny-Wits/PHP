<!DOCTYPE html>
<head>
    <title>POST FORM</title>
</head>
<body>
<form action="#" method="post">
    <input type="Name" name="name">
    <input type="submit" name = "submit">
</form>
<?php
if(isset($_POST['submit'])){
    echo $_POST['name'];
}?>  
</body>
</html>