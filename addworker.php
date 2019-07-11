<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Enter the data to add Workers</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <center>
        <p>
       Worker Id: <input type="number" name="workerid" required>
        </p>
        <p>
        Worker Name: <input type="text" name="workername" required>
        <p>
        <input type="submit" value="Submit">
        <center>

    </form>

    <?php
        $workerid=filter_input(INPUT_POST,'workerid');
        $workername=filter_input(INPUT_POST,'workername');
            
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="udaandb";
        $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            echo "connection lost";
        }
        else{
            
            $sql="insert into workers(id,name) values ('$workerid','$workername')";
            if($conn->query($sql)){
                echo "<br>";echo "<br>";echo "<br>";
                echo "$workername inserted:";
            }
            else{
                echo "not entered";
            }

        }
    ?>


</body>
</html>