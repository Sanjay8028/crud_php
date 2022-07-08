 
<!DOCTYPE hrml>
 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crud</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>




 
@keyframes rotate {
	100% {
		transform: rotate(0.1turn);
	}
}


.rainbow {

	
		position: absolute;
		z-index: -2;
		left: -50%;
		top: -50%;
		width: 200%;
		height: 200%;
		background-color: #399953;
		background-repeat: no-repeat;
		background-size: 50% 50%, 50% 50%;
		background-position: 0 0, 100% 0, 100% 100%, 0 100%;
		background-image: linear-gradient(#399953, #399953), linear-gradient(#fbb300, #fbb300), linear-gradient(#d53e33, #d53e33), linear-gradient(#377af5, #377af5);
		animation: rotate 4s linear infinite;
	 
	 
	
}
  	
  </style>
</head>
<body>
	<div class="container">
		<div class="col-sm-4">
			<h3 style="color: green; text-align:center;">Table</h3>

			<table class="table" bgcolor="orange">
			
					<tr>
						<td>id</td>
						<td>username</td>
						<td>password</td>
						<td>update</td>
						<td>delete</td>		
					</tr>

				
					<?php
					include('connection.php');

					 $sql="SELECT * FROM table1";
  
                     $data=mysqli_query($conn,$sql);

                     while($result=mysqli_fetch_array($data)) {
                    echo "<pre>";
                    print_r($result);
                    
                     ?> 

                     
					
					<tr class="marquee">
						<td> <?php echo $result['id']; ?></td>
						<td> <?php echo $result['username']; ?></td>
						<td> <?php echo $result['password']; ?></td>
						
				<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $result['id'];?>"class="text-white">delete</a></button></a></td>
			 <td><button class="btn-success btn"><a href="update.php?id=<?php echo $result['id'];?>" class="text-white">update</a></button></a></td>

					 	
					</tr>
				
					<?php }



						?>
				


			</table>

			<!-- <button class="rainbo">border</button> -->
		</div>
		
	</div>

</body>
</html>

   

