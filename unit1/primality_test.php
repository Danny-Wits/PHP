<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">NUMBER </label>
        <input type="number" name="number" id="number">
        <button>Check</button>
        <?php
        if(isset($_POST["number"])){
        $number=(double) $_POST["number"];
        $flag=true;
        for ($i=1; $i <$number; $i++) { 
            if(($i**$number-$i)%$number==0){
                echo "<hr>".$i**$number;
                echo "<hr>".$i."^".$number." - ".$i." | ".$number;
            }else{
                $flag=false;
                break;
            }
        }
        echo "<hr>".$number.($flag?" is prime":" is composite");   
        }
        ?>
    </form>
</body>
</html>