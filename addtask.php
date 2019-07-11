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
       TaskId: <input type="number" name="taskid" required>
        </p>
        <p>
        Task Name: <input type="text" name="taskname" required>
        <p>
        <p>
        Frequency: <input type="text" name="frequency" required>
        <p>
        <input type="submit" value="Submit">
        <center>

    </form>

    <?php
        $taskid=filter_input(INPUT_POST,'taskid');
        $taskname=filter_input(INPUT_POST,'taskname');
        $freq=filter_input(INPUT_POST,'frequency');
            
        $host="bbj31ma8tye2kagi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $dbusername="ha9ycmh4mllh25x0";
        $dbpassword="yrpqr64bluz6kk40";
        $dbname="mappsr7b4vl2osq7";
        $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            echo "connection lost";
        }
        else{
            
            $sql="insert into task(id,taskname,frequency) values ('$taskid','$taskname','$freq')";
            if($conn->query($sql)){
                echo "<br>";echo "<br>";echo "<br>";
                echo "query $taskname to be carried out $freq";
            }
            else{
                echo "not entered";
            }

        }
    ?>


</body>
</html>