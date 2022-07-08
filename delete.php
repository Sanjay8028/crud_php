<?php
 include('connection.php');

 $id = $_GET['id'];
 $sql = "DELETE FROM table1 where id = $id";


$data= mysqli_query($conn, $sql);
 

 header('location:display.php');


?>

 

























