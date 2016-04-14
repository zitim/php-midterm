<?php
include 'connect.php';

if (isset($_POST['u_id'])) {
	$u_id=$_POST['u_id'];
	$u_pw=$_POST['u_pw'];
	$u_mail=$_POST['u_mail'];
	$u_phone=$_POST['u_phone'];
	$query="INSERT INTO phpmidterm(username,password,email,phone) VALUES('$u_id','$u_pw','$u_mail','$u_phone')";

	if(mysqli_query($conn,$query)){
		echo '1';
	}else{
		echo '2';
	}

}

?>
<!DOCTYPE html>
<html lang="en">

			<div class="login">
				<h1>註冊完成，請重新登入</h1><br/><br/>
				<a href="log.php">點我回登入頁</a>
			</div>
		
</html>