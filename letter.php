<?php
include('connection.php');
 function insert()
 {
 	global $con;
 	$email = $_POST['email'];
 	$sql="INSERT INTO letter (email)VALUES('$email')";
 	$rs=mysqli_query($con,$sql);

 	if(mysqli_affected_rows($con)>=1)
 	{
 		echo "<h3 style='color:green'>Your Email inserted Successfully ! ! </h3>";
 		include ("index.html");
 		
 	}
 	else
 	{
 		echo "<h2>Message Not Inserted ? ? </h2>";
 	}
 }
 insert();
?>
