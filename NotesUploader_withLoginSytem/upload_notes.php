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
  <form action=<?php echo "file_upload.php?username=".$_GET['username']?> method="POST" enctype="multipart/form-data">

    <label for="stream">Stream: </label>
    <select name="stream" id="stream" required>
      <option value="BSC">BSC</option>
      <option value="BA">BA</option>
      <option value="BCom">BCom</option>
      <option value="BCA">BCA</option>
    </select>
    <label for="Semester">Semester : </label>
    <select name="semester" id="semester" required>
      <option value="1">1st</option>
      <option value="2">2nd</option>
      <option value="3">3rd</option>
      <option value="4">4th</option>
      <option value="5">5th</option>
      <option value="6">6th</option>
    </select>
    <br>
    <label for="Subject">Subject : </label>
    <input type="text" name="subject" required>
    <br>
    <textarea name="text" id="text" cols="30" rows="10" placeholder="PLEASE ENTER LITTLE DESCRIPTION OF THE CONTENT YOU ARE UPLOADING"></textarea><br>
    <label for="image_file">NOTES : </label>
    <input type="file" accept=".pdf,.jpg,.txt,.png" name="content" id="file" required><br>
    <p>Max file size 10MB</p>
    <input type="submit" name="upload" value="Upload Content">

  </form>
  <?php
    # Check of redirects
    if(isset($_GET['too_large']))echo "<br>"."Too large of a file";
  ?>
</body>

</html>