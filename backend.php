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

             
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception LOg</title>
    <link rel="stylesheet" href="mdb/css/bootstrap.css">
    <link rel="stylesheet" href="mdb/css/mdb.css">
    <link rel="stylesheet" href="mdb/css/style.css">
    <link rel="stylesheet" href="mdb/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>

    <div class="cointainer mt-5">
    <!--*********************START HARE********************-->
    
        <button class="btn btn-info "> Add log</button>
        
    <div id="toshow">
        <label  for="exception" class="text center mr-2 " >Exception </label>
        <textarea name="" id="" cols="25" rows="5"></textarea>
    
    
        <textarea name="" id="" cols="25" rows="5"></textarea>
    </div>

    <!--*********************End HARE********************-->
</div>

    <div class="cointainer margin-bottom: 500px">
        
    </div>

    

    <script src="mdb/js/jquery.js"></script>
    <script src="mdb/js/popper.js"></script>
    <script src="mdb/js/bootstrap.js"></script>
    <script src="mdb/js/mdb.js"></script>
    
</body>
<head>
    <script>
        $(document).ready(function(){
            $("#toshow").hide();
         $(".btn").click(function(){
             
             $("#toshow").show();
         });

     });
     </script>
</head>
</html> 






  

        <?php 
        // continue php and closes html
            $result->data_seek($j);
            // data seek
            echo  $result->fetch_assoc['tag'];

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

