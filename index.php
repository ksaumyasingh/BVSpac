
 <html><?php
$question=filter_input(INPUT_POST, 'question', FILTER_SANITIZE_SPECIAL_CHARS);
if(isset($question)){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }

    
    $question=filter_input(INPUT_POST, 'question', FILTER_SANITIZE_SPECIAL_CHARS);
    //$clean = filter_input(INPUT_POST, 'clean', FILTER_SANITIZE_SPECIAL_CHARS);
    $sql="INSERT INTO `quora`.`question` (`ques`, `clean`, `dd`) VALUES ('$question', 'null' , current_timestamp());";
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
    <head>
        <title>Q & A</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="index.php" method="post">
        <div><h1>Q & A</h1></div>
       <textarea name="question" id="question" cols="30" rows="10" placeholder="Ask your question here..."></textarea>
       <input type="submit" value="POST" name="post" />
        </form>
    </body>
</html>   