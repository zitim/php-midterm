<?php
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
				<h1>會員登入</h1>
				<form action="logsuccess.php" method="post">
					帳號：<input type="text" name="u_id" /><br/>
					密碼：<input type="password" name="u_pw" /><br/><br/>
					<input type="hidden" name="logined" value="true" />
				<input type="submit" value="登入"><br/><br/>
				</form>
				<a class="sign" href="reg.php">註冊</a>
		

</body>
</html>