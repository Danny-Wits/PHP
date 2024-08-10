<!DOCTYPE html>
<head>
    <title>GET FORM</title>
</head>
<body>
<form action="#" method="get">
    <input type="number" name="number">
    <input type="submit" name = "submit">
</form>
<?php
if(isset($_GET['submit'])){
    echo $_GET['number'];
}?>  
</body>
</html>

