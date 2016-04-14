<?php
	include 'connect.php';

	if(isset($_POST["name"])){
		$name=$_POST["name"];
		$url=$_POST["url"];
	}
	
    $shorturl=file_get_contents( 'http://tinyurl.com/api-create.php?url='.urlencode($url));

    date_default_timezone_set("Asia/Taipei");
	$time = date("Y-m-d H:i:s");

    $sqll="INSERT INTO phpmidterm2
	(name,url,shorturl,click,uploadtime) 
	VALUES('$name','$url','$shorturl','1','$time')";
	mysqli_query($conn,$sqll);

	$read="SELECT * FROM phpmidterm2";
	$readresult=mysqli_query($conn,$read);
	
	echo "<table border='1'>";
	echo "<tr>";
	echo "<td>name</td><td>url</td><td>shorturl</td><td>clicknumber</td><td>uploadtime</td>";
	echo "</tr>";
	while($result=mysqli_fetch_array($readresult)){
	
	//print_r($result);
	echo "<tr>";
	echo "<td>".$result[0]."</td><td><a href='".$result[1]."'>".$result[1]."</a></td><td><a href='".$result[2]."'>".$result[2]."</a></td><td>".$result[3]."</td><td>".$result[4]."</td>";
	echo "</tr>";
	}
	echo "</table>";

?>