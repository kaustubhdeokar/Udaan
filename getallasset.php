<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Asset(s)</h1>

    <?php
            
        $host="bbj31ma8tye2kagi.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $dbusername="ha9ycmh4mllh25x0";
        $dbpassword="yrpqr64bluz6kk40";
        $dbname="mappsr7b4vl2osq7";
        $conn=new mysqli ($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            echo "connection lost";
        }
        else{
            
            $sql="select * from asset";
            $result=$conn->query($sql);
            if($result->num_rows>0){

                while($row=$result->fetch_assoc())
                {
                        echo "id:".$row["id"]." assettype: ".$row["assettype"]."<br>";
                }
            }

        }
    ?>


</body>
</html>