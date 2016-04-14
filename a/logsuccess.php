<?php
include 'connect.php';
session_start();

if(isset($_POST["u_id"])){
		$u_id=$_POST["u_id"];
		$u_pw=$_POST["u_pw"];

	$read="SELECT * FROM phpmidterm WHERE username='$u_id' AND password='$u_pw'";
	$result=mysqli_query($conn,$read);

	$rows=mysqli_num_rows($result);
	echo "$rows";
	if($rows){
		echo "success";
		$_SESSION["check"]="123";
		$_SESSION["u_id"]=$u_id;
		$_SESSION["u_pw"]=$u_pw;
		header('Location:index.php');
		
	}else{
		echo "failed";
		header('refresh:2, url=log.php');
	}
	}


?>