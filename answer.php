<?php
$answer=filter_input(INPUT_POST, 'answer', FILTER_SANITIZE_SPECIAL_CHARS);
if(isset($answer)){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    //$sno = filter_input(INPUT_POST, 'sno', FILTER_SANITIZE_NUMBER_INT);
    $sql="INSERT INTO `quora`.`answer` (`sno`, `ans`, `dd`) VALUES ( '1' ,'$answer' , current_timestamp());";
    echo $sql;

    if($con->query($sql) == true){
        echo "Successfully inserted";

    }
    else{
        echo "ERROR:$sql <br> $conn->error";
    }

    $con->close();
}
?>
<html>
    <head>
        <title>Q & A</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="answer.php" method="post">
        <div><h1>Q & A</h1></div>
       <textarea name="answer" id="answer" cols="30" rows="10" placeholder="Type your answer here..."></textarea>
       <input type="submit" value="POST" name="post" />
        </form>
    </body>
</html>

