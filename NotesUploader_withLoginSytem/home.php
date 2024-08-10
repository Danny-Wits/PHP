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
  <?php
  require "check.php";
  ?>
  <form action=<?php echo "upload_notes.php?username=".$_GET['username']?> method="post">
    <input type="submit" value="add_notes" id="add_notes"upload="add_notes">
  </form>

</body>

</html>