   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="mdb/css/bootstrap.css">
    <link rel="stylesheet" href="mdb/css/mdb.css">
    <link rel="stylesheet" href="mdb/css/style.css">
    <link rel="stylesheet" href="mdb/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
<body>
   
    <div class="cointainer m-5 p-3 border border-danger">

    <!--*********************START HARE********************-->
 <form action="dbopration.php" method="POST" class="" >
 
     <div class="form-roup row">
         <div class="col-sm-6 col-lg-3">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" placeholder="Enter Your Name" class="form-control"><br>
        </div>
        <div class="col-sm-6 col-lg-3">
            <label for="email">Email Address:</label><br>
            <input type="email" name="email" placeholder="Enter Your Email"class="form-control"><br>
        </div>
        
        <div class="col-sm-6 col-lg-3">
            <label for="number">Mobile Number:</label><br>
            <input type="number" name="number" placeholder="Entaer your Mobile Number" class="form-control"><br>
        </div>
        
        <div class="col-sm-6 col-lg-3">
            <label for="date">Select Date of Birth</label><br>
             <input type="date" name="date" id="date" class="form-control"><br>
        </div>
      </div>

    <div class=" row">
        <div class="col-sm-6 col-lg-3">
                <label for="listbox">Year Of Study</label><br>
                <select Name="listbox" class="form-control">  <br>
                    <option> 1st Year </option>  
                    <option> 2nd Year  </option>  
                    <option> 3rd Year  </option>  
                    <option> Last Year </option>  
                </select> <br> 
            </div>
      

         <div class="form-check col-sm-6 col-lg-3 ml-3">

                <label for="radio">Select Gender:</label><br>
                <input type="radio" name="gender" id="male" name="gender" value="male" class="form-check-input" checked >
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female" class="form-check-input">
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other" class="form-check-input">
                <label for="other">Other</label><br>
            </div>
        
        <div class=" form-check col-sm-6 col-lg-3 ml-3">
            <label for="checkbox">Select Your Subjects</label><br>
            <input type='checkbox' name='check_list[]' value='java' checked class="form-check-input">Java<br>
            <input type='checkbox' name='check_list[]' value='php'class="form-check-input">PHP<br>
            <input type='checkbox' name='check_list[]' value='python'class="form-check-input">Python<br>
        </div>
    </div>
        
        <label for="address">Address: </label><br> 
        <div class="input-group">
            <textarea name="address" id="address" rows="5"  class="form-control" placeholder="Enter Your Address"></textarea>  
        </div>
        
        <div>
            <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg">
            <input type="reset" name="reset" id="reset" class="btn btn-danger btn-lg" style="">   
            <a href ="retrive.php" class="btn btn-info btn-lg" >View all data</a>
        </div>
    
    </form>


    
    <!--*********************End HARE********************-->
</div>

    <div class="cointainer margin-bottom: 500px">
        
    </div>

  

    <script src="mdb/js/jquery.js"></script>
    <script src="mdb/js/popper.js"></script>
    <script src="mdb/js/bootstrap.js"></script>
    <script src="mdb/js/mdb.js"></script>
    
</body>`
</html>