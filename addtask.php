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
            
        $host="us-cdbr-iron-east-02.cleardb.net";
        $dbusername="b5a6d085f34f5c";
        $dbpassword="6f8d913a";
        $dbname="heroku_35e4fe7ddf505ea";
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