<?php
	include 'connect.php';

	$u_id="";
	if(isset($_SESSION['u_id'])){
	$u_id=$_SESSION['u_id'];
	}

	
	$del="DELETE FROM phpmidterm WHERE username=".$u_id;
	mysqli_query($conn,$del);

	$read="SELECT * FROM phpmidterm";
	$readresult=mysqli_query($conn,$read);
	
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>username</td><td>password</td><td>email</td><td>phone</td><td>更新</td><td>刪除</td>";
	echo "</tr>";
	while($result=mysqli_fetch_array($readresult)){
	
	//print_r($result);
	echo "<tr>";
	echo "<tr>";
	echo "<td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td>";
	echo "<td><a href='travel_upd.php?$u_id=".$result[0]."'>更新</a></td>";
	echo "<td><a href='checkdel.php?$u_id=".$result[0]."'>刪除</a></td>";
	echo "</tr>";
	}
	echo "</table>";
?>