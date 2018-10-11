<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="conn.php" method="POST" enctype="multipart/form-data">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" maxlength="35" name="Nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" maxlength="35" name="NIM"></td>
			</tr>
			<tr>
				<td>Kelas</td> 
				<td>:</td>
				<td><input type="radio" name="Kelas" value="D3MI4101">D3MI4101<br> 
    			<input type="radio" name="Kelas" value="D3MI4102">D3MI4102<br>
    			<input type="radio" name="Kelas" value="D3MI4103">D3MI4103
			</tr>
			<tr>
				<td>Jenis Kelamin</td> 
				<td>:</td>
				<td><input type="radio" name="Jenis_Kelamin" value="Perempuan">Perempuan 
    			<input type="radio" name="Jenis_Kelamin" value="Laki-Laki">Laki-Laki
			</tr>
			<tr>
				<td>Hobi</td> 
				<td>:</td>
				<td><input type="checkbox" name="Hobi" value="Menggambar">Menggambar<br>
				<input type="checkbox" name="Hobi" value="Menulis">Menulis<br>
				<input type="checkbox" name="Hobi" value="Membaca">Membaca<br>
				<input type="checkbox" name="Hobi" value="Berenang">Berenang<br></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="Fakultas">
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FEB">FEB</option>
					<option value="FKB">FKB</option>
					</select></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="Alamat"></textarea></td>
			</tr>
			<td>Password</td>
				<td>:</td>
				<td><input type="password" name="Alamat"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="kirim" value="submit"></td>
			</tr>
		</form>
	</table>
</body>
</html>