<!-- Creating upload script -->
<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
  UPLOAD FILE: <input type="file" name="file">
  <input type="submit" name="sub" value="Upload">
</form>
<?php
if(isset($_POST['sub'])){
    $file=$_FILES['file'];
    $name=$file['name'];
    $tmp_path=$file['tmp_name'];
    move_uploaded_file($tmp_path,"new/$name");
}
?>
</body>
</html>