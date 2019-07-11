<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Enter the data to add Tasks</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <center>
        <p>
       WorkerId: <input type="number" name="workerid" required>
        </p>
        <p>
        Task id: <input type="number" name="taskid" required>
        <p>
        <p>
        AssetId: <input type="number" name="assetid" required>
        <p>
        <p>
        FromDate: <input type="date" name="fromdate" required>
        <p>
        <p>
        ToDate: <input type="date" name="todate" required>
        <p>
        <input type="submit" value="Submit">
        <center>

    </form>

    <?php
        $taskid=filter_input(INPUT_POST,'taskid');
        $workerid=filter_input(INPUT_POST,'workerid');
        $assetid=filter_input(INPUT_POST,'assetid');
        $fromdate=filter_input(INPUT_POST,'fromdate');
        $todate=filter_input(INPUT_POST,'todate');

        $host="bbj31ma8tye2kagi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $dbusername="ha9ycmh4mllh25x0";
        $dbpassword="yrpqr64bluz6kk40";
        $dbname="mappsr7b4vl2osq7";
        $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            echo "connection lost";
        }
        else{
            
            $sql="insert into allocation(workerid,taskid,assetid,fromdate,todate) values ('$taskid','$workerid','$assetid','$fromdate','$todate')";
            if($conn->query($sql)){
                echo "<br>";echo "<br>";echo "<br>";
                echo "task enetered";
            }
            else{
                echo "not entered";
            }

        }
    ?>


</body>
</html>