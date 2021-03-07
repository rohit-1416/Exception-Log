<?php
        // starting Database opration
            require_once 'login.php';
            $conn= new mysqli($hn,$un,$pw,$db);
    
            // database connection object
    
            if($conn->connect_error) die ($conn->connect_error);
            // connect succes or no
?>