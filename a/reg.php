<?php
	include 'connect.php';
?>
<html>
	<!DOCTYPE html>
	<html lang="en">
	<h1>註冊會員</h1>
				<form action="regsuccess.php" method="post">
					帳號：<input type="text" name="u_id" size="24" /><br/>
					密碼：<input type="password" name="u_pw" size="24" /><br/>
					email：<input type="text" name="u_mail" size="24" /><br/>
					電話：<input type="text" name="u_phone" size="24" maxlength="10"/><br/>
					
					<input type="submit" value="送出">
				</form>
</html>
