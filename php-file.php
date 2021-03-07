<?php
        if(isset($_POST['name'])){
            echo $_POST['name'];
            echo "<br>";
        }
        if(empty($_POST['name'])){
           
            echo '<script> alert ("Enter a Name");';
            echo 'window.location="student-details-form.php";</script>';
        }
        

        if(isset($_POST['email'])){
            echo $_POST['email'];
            echo "<br>";
        }


        if(isset($_POST['number'])){
            echo $_POST['number'];
            echo "<br>";
        }
        if(isset($_POST['listbox'])){
            echo $_POST['listbox'];
            echo "<br>";
        }


        if(isset($_POST['radio'])){
            echo $_POST['radio'];
            echo "<br>";
        }


        if(isset($_POST['address'])){
            echo $_POST['address'];
            echo "<br>";
        }

        if(isset($_POST['date'])){
            echo $_POST['date'];
            echo "<br>";
        }

        
        if(isset($_POST['submit'])){//to run PHP script on submit
            if(!empty($_POST['check_list'])){
            // Loop to store and display values of individual checked checkbox.
            foreach($_POST['check_list'] as $selected){
            echo $selected."</br>";
            }
            }
            }
        ?>