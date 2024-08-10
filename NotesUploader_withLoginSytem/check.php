<?php
  if(!(isset($_SESSION["key"])&& $_SESSION["key"]=="K".$_GET['username']."K")){
    header("Location: index.php?invalid_login=true");
   }
?>