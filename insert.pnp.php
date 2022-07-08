<?php
include('connection.php');
if(isset($_POST['submit'])){


    $user=$_POST['username'];
    $pass=$_POST['pswd'];
 $sql="INSERT INTO `zeptologin`( username, password) VALUES ('$user','$pass')";
    //echo $sql;
// die();
    $data=mysqli_query($conn,$sql);
     // header('location:display.php');

 
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
        <!-- <div class="signup-link">Not a member? <a href="#">Signup now</a></div> -->
      </form>
    </div>
    </div>

 
 


	</form>

</body>
</html>