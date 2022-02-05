<html>
    <head>
        <title>Q & A</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="display.php" method="post">
        <div><h1>Q & A</h1></div>
        
        <h3><?php $con = mysqli_connect("localhost", "root", "", "quora");
                    $view = filter_input(INPUT_POST, 'view', FILTER_SANITIZE_NUMBER_INT);
                    $selectquery= "SELECT * FROM question WHERE sno=$view";
                    $query= mysqli_query($con, $selectquery);
                    $res=mysqli_fetch_assoc($query);
                    echo "<h2>".$res["sno"]."</h2><br>".$res["ques"]."<br>";
                        
            ?></h3>

        

        </form>
    </body>
</html>