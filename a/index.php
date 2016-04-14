<?php
include 'connect.php';
session_start();

$u_id="";
if(isset($_SESSION['u_id'])){
	$u_id=$_SESSION['u_id'];
}
echo $u_id."歡迎回來<br/>";


echo "<a href=profile.php>修改資料</a>";

?>