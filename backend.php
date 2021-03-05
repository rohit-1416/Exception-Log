<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass=$_POST['pass'];
    
// starting dataabase
    require_once 'login.php';
    $conn= new mysqli($hn,$un,$pw,$db);

    // database connection object

    if($conn->connect_error) die ($conn->connect_error);
    // connect succes or no

    $query="SELECT * FROM error";
    // retrive value from db
    $result= $conn->query($query);
    // executes query and gets result

    if(!$result){
     die("database accessed failed".$conn->error);

    }else
    {
        $rows = $result->num_rows;
        // fetch all rows 
        for($j=0;$j<$rows;++$j)
        {
            $result->data_seek($j);
            // data seek
            $op=$result->fetch_assoc()['password'];
            // value from databasse rerived in op variable
         if($pass ==$op )
         //  checks entered value matech or not
         {
            
           ?>
        <!-- closes php tag and continue html -->

           










           

        <?php 
        // continue php and closes html

         }
         else{
             echo "Wrong password";
             return null;
         }
        }
    }
    // closes connection
    $result->close();
    $conn->close();
   }
    ?>

