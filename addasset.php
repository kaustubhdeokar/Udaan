<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Enter the data to add Asset</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <center>
        <p>
       AssetId: <input type="number" name="assetid" required>
        </p>
        <p>
        Password: <input type="text" name="assettype" required>
        <p>
        <input type="submit" value="Submit">

        <center>

    </form>

    <?php
        $id=filter_input(INPUT_POST,'assetid');
        $type=filter_input(INPUT_POST,'assettype');
            
        $host="bbj31ma8tye2kagi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $dbusername="ha9ycmh4mllh25x0";
        $dbpassword="yrpqr64bluz6kk40";
        $dbname="mappsr7b4vl2osq7";
        
        $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            echo "connection lost";
        }
        else{
            
            $sql="insert into asset(id,assettype) values ('$id','$type')";
            if($conn->query($sql)){
                echo "<br>";echo "<br>";echo "<br>";
                echo "query { $id:$type } inserted successfully";
            }
            else{
                echo "not entered";
            }

        }
    ?>


</body>
</html>