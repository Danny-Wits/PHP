<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        Roll no: <input type="roll" name="roll">
        Name: <input type="text" name="name">
        <input type="submit" name="input" value="Input">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="see" value="Print">
    </form>
    <?php

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    //connect to database 
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "test";
    $connection = mysqli_connect($host, $user, $password, $database);

    if (isset($_POST['input'])) {
        //Adding data to table 
        $query = "Insert into std_table (`Roll`,`Name`) Values ('$roll','$name');";
        if (mysqli_query($connection, $query)) {
            echo "DATA UPLOAD SUCCESSFUL";
        }
        ;
    }

    if (isset($_POST["delete"])) {

        //Deleting data from a table
        $query = "Delete from std_table Where `roll`='$roll'";
        if (mysqli_query($connection, $query)) {
            echo "DATA DELETED";
        }
        ;
    }


    if (isset($_POST["see"])) {
        //Selecting from a table
        $query = "Select * from std_table ";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            echo " no data found";
        } else {
            while (($row = mysqli_fetch_assoc($result)) != null) {
                print_r($row);
            }

        }
    }

    ?>
</body>

</html>