<?php
session_start();
#Connecting
require "connection.php";

#Sign in
if (isset($_POST['S'])) {
    $_name = $_POST['name'];

    #Password Hash
    $_password = $_POST['password'];
    $hashed_password = encrypting($_password);

    #duality check
    $query = "Select _Name from login_data Where _Name='$_name'";
    $result = mysqli_query($connection, $query);
    if ($result->num_rows > 0) {
        header("Location: index.php?already_exist=true");
    } else {
        #Saving
        $query = "Insert into login_data(`_Name`,`_Password`) values('$_name','$hashed_password');";
        $result = mysqli_query($connection, $query);
        login($_name);
    }
} 
#Login
else if (isset($_POST['L'])) {
    $_name= $_POST['name'];
    #Password Hash
    $_password = $_POST['password'];
    $hashed_password = encrypting($_password);
    
    #Query
    $query = "Select _Name,_Password from login_data Where _Name='$_name'";
    $result = mysqli_query($connection, $query);
    #Exist or not
    if ($result->num_rows == 0) {
        header("Location: index.php?does_not_exist=$query");
    }
    else{
        $result=$result->fetch_assoc();
        #Password check
        if ($result['_Password']==$hashed_password){
           login($_name);
        }
        else{
            header("Location: index.php?incorrect_password=true");  
        }
    }   
}
function login($user){
#generating session
$_SESSION["key"]="K".$user."K";
#redirecting
header("Location: home.php?username=$user");
}

function encrypting($password){
    return hash('sha256',$password);
}
