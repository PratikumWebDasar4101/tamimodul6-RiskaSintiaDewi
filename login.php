<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="ceklogin.php" method="POST" enctype="multipart/form-data">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" maxlength="35" name="user"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="Password" name="Password"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="kirim" value="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>