<?php
include('connection.php');
 function insert()
 {
 	global $con;
 	$name = $_POST['fname'];
 	$email = $_POST['email'];
 	$msg = $_POST['message'];
 	$sql="INSERT INTO contact (fname, email, message)VALUES('$name','$email','$msg')";
 	$rs=mysqli_query($con,$sql);

 	if(mysqli_affected_rows($con)>=1)
 	{
 		echo "<h3 style='color:green'>Message inserted Successfully ! ! </h3>";
 		include("contactMe.html");
 	}
 	else
 	{
 		echo "<h2>Message Not Inserted ? ? </h2>";
 	}
 }
 insert();
?>
