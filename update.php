<?php

include('connection.php');
if(isset($_POST['submit'])){
	$id = $_GET['id'];





    $username=$_POST['username'];

    $password=$_POST['pswd'];
 $sql="UPDATE table1 set id= $id, username='$username',password='$password' where id = $id ";
    //echo $sql;
// die();
    $data=mysqli_query($conn,$sql);
    

    header('location:display.php');
 
}

 
?>




<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> crud operation</title>
	<link rel="stylesheet" type="text/css" href="style.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

 
  
<div class="container">
  <div class="row">
    <div class="col-sm-6">
   
      
      <p style="color: green; text-align: center;">Update Form</p>
       <form method="post" style="background-color: lightblue;">
       
       		<div class="form-group">
      <label for="text">username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
    </div>
     
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
       


       	

       </form>

  
    </div>

    <?php
include('connection.php');
if(isset($_POST['submit'])){


    $username=$_POST['username'];
    $password=$_POST['pswd'];
 $sql="INSERT INTO `table1`( username, password) VALUES ('$username','$password')";
    //echo $sql;
// die();
    $data=mysqli_query($conn,$sql);
     header('location:display.php');
 
}


?>
    <div class="col-sm-6">

        <div class="wrapper">
      <div class="title">INSERT DATA</div>
      <form method="post">
        <div class="field">


      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
       
          <label>username</label>
        </div>
        <div class="field">
         <input type="password" class="form-control" id="pswd" placeholder="Enter password" name="pswd">
          <label>Password</label>
        </div>
        <div class="content">
          
          <!-- <div class="pass-link"><a href="#">Forgot password?</a></div> -->
        </div>
        <div class="field">
          <input type="submit" value="submit" name="submit" id="submit">
        </div>
        
      </form>
    </div>
    </div>

 
    	
    </div>
</div>
</div>


</head>
<body>

	 
</body>
</html>