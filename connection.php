<?php
$con = mysqli_connect("localhost", "root", "")or die ("Connection Failed");
if (!$con) {
	echo "No Connection Established";
}
else{
	mysqli_select_db($con, "cho_web_design") or die ("Could not select the database");

	// echo "Connected Successfully!";
}

?>
