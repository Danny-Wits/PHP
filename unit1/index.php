<?php
if(!isset($_POST['submit'])){
?>
<form action="#" method="post">
Name : <input type="text" name="name"> <hr>
Hidden : <input type="hidden" name="hidden_data" value="Student"><hr>
<input type="submit" name="submit">
</form>

<?php 
}else{
  echo "Welcome ". $_POST['name']."<hr>";
  echo "You are a  ". $_POST['hidden_data'];
}
?>