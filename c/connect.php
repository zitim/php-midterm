<?php
	echo "<meta charset='UTF-8' />";

	$a="localhost";
	$conn=mysqli_connect($a,"root","","phpmidterm");
	mysqli_query($conn,"set names utf8");
	mysqli_select_db($conn,"phpmidterm");

?>