<html>
    <head>
        <title>Q & A</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <div><h1>Q & A</h1></div>
        <form action="oldlist.php" method="post">
        <input type="text" name="search" value="" size="110" placeholder="Search question"/>
        <input type="submit" value="Search" name="search" /><br>
        </form>
        <form action="viewans.php" method="post">
        <input type="text" name="view" value="" size="50" placeholder="Enter Question's S.No."/>
        <input type="submit" value="View Answer" name="viewans" />
        </form>
        <form action="index.php" method="post">
            <input type="submit" value="Ask Question" name="askques" />
        </form>
        <br><br>
        <table border="0">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Question</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "quora");

                    $selectquery= "SELECT * FROM question";
                    $query= mysqli_query($con, $selectquery);
                    $nums= mysqli_num_rows($query);
                    //echo $nums."<br>";
                    while($res=mysqli_fetch_assoc($query))
                    {
                        ?>
                        <tr>
                            <th> <?php echo $res["sno"] ?> </th>
                            <th> <?php echo $res["ques"] ?></th>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>
<?php
   /*$con = mysqli_connect("localhost", "root", "", "quora");

   $selectquery= "SELECT * FROM question";
   $query= mysqli_query($con, $selectquery);
   $nums= mysqli_num_rows($query);
   echo $nums."<br>";
   while($res=mysqli_fetch_assoc($query))
   {
       echo $res["sno"]."  ".$res["ques"];
       echo "<br>";
   }
   
 /*  $stmt = mysqli_prepare($con, "SELECT * FROM question");
   
   //Executing the statement
   mysqli_stmt_execute($stmt);

   mysqli_stmt_store_result($stmt);

   //Number of rows
   $count = mysqli_stmt_num_rows($stmt);

   print("Number of rows in the table: ".$count."\n");
   
   //Closing the statement
   mysqli_stmt_close($stmt);
   

   //Closing the connection
   mysqli_close($con);*//*
    $con = new mysqli("localhost", "root", "", "quora");

   /*$con -> query("CREATE TABLE Test(Name VARCHAR(255), Age INT)");
   $con -> query("insert into Test values('Raju', 25),('Rahman', 30),('Sarmista', 27)");
   print("Table Created.....\n");

   $stmt = $con -> prepare( "SELECT * FROM Test WHERE Name in(?, ?)");
   $stmt -> bind_param("ss", $name1, $name2);
   $name1 = 'Raju';
   $name2 = 'Rahman';
    $stmt = $con -> prepare( "SELECT * FROM question");
   //Executing the statement
   $stmt->execute();
  

   //Retrieving the result
   $result = $stmt->get_result();

   //Fetching all the rows as arrays
   while($obj = $result->fetch_assoc()){	
      echo $obj["sno"]."  ".$obj["ques"];
      echo "\n";
      
   }

   //Closing the statement
   $stmt->close();

   //Closing the connection
   $con->close();*/
?>