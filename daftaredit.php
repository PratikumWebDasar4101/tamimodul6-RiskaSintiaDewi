<?php  

include 'db.php';
$NIM=$_GET['NIM'];
$query=mysqli_query($conn, "select * from pendaftaran where NIM='$NIM'");
$row=mysqli_fetch_array($query);

function acive_radio_button($value,$input){
	$result = $input==$result?'checked':'';
	return $result;
}	
?>

<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['NIM'];?>" name="NIM">
			<table border="0">
	<form action="update.php" method="POST">

					<tr>
						<td>Nama</td> 
						<td>:</td> 
						<td><input type="text" name="Nama" value="<?php echo $row['Nama'];?>"size="35"><br></td>
					</tr>
					<tr>
						<td>NIM</td> 
						<td>:</td> 
						<td><input type="number" name="NIM" value="<?php echo $row['NIM'];?>"size="10"><br></td>
					</tr>
					<tr>
						<td>Kelas</td> 
						<td>:</td> 
						<td><input type="radio" name="Kelas" value="<?php echo $row['Kelas'];?>">D3MI4101<br>
						<input type="radio" name="Kelas" value="<?php echo $row['Kelas'];?>">D3MI4102<br>
						<input type="radio" name="Kelas" value="<?php echo $row['Kelas'];?>">D3MI4103<br></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td> 
						<td>:</td> 
						<td><input type="radio" name="Jenis_Kelamin" value="<?php echo $row['Jenis_Kelamin'];?>">Perempuan<br>
						<input type="radio" name="Jenis_Kelamin" value="<?php echo $row['Jenis_Kelamin'];?>">Laki-Laki<br>
					</tr>
					<tr>
						<td>Hobi</td> 
						<td>:</td>
						<td><input type="checkbox" name="Hobi" value="<?php echo $row['Hobi'];?>">Menggambar<br>
						<input type="checkbox" name="Hobi" value="<?php echo $row['Hobi'];?>">Menulis<br>
						<input type="checkbox" name="Hobi" value="<?php echo $row['Hobi'];?>">Membaca<br>
						<input type="checkbox" name="Hobi" value="<?php echo $row['Hobi'];?>">Berenang<br></td>
					</tr>
					<tr>
						<td>Fakultas</td>
						<td>:</td>
						<td><select name="Fakultas">
							<option value="<?php echo $row['Fakultas'];?>">FIT<br>
							<option value="<?php echo $row['Fakultas'];?>">FIK<br>
							<option value="<?php echo $row['Fakultas'];?>">FEB<br>
							<option value="<?php echo $row['Fakultas'];?>">FIK<br>
							</select></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><input type="textarea" name="Alamat" value="<?php echo $row['Alamat'];?>"><br></td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" value="Update"></td>
					</tr>
		</table>
	</form>
</body>
</html>