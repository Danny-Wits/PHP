<?php
session_start();
require "check.php";
if (isset($_POST["upload"])) {
    #Meta details
    $subject = $_POST['subject'];
    $semester = $_POST['semester'];
    $stream = $_POST['stream'];
    $text = $_POST['text'];

    #File check and Upload
    $file=$_FILES['content'];
    $upload_limit=1000;
    if($file['size']/1000>$upload_limit){
        header("Location: upload_notes.php?username=".$_GET['username']."&too_large=true");
    }
    else{
    #SAVING THE FILE
    $type= explode('.',$file['name']);
    $type= end($type);
    $location = "uploaded_notes/".$_GET['username'].$subject."_".$semester."_".$stream.".".$type;
    move_uploaded_file($file['tmp_name'],$location);
}
}
