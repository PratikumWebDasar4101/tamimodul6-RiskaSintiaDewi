<?php

include 'db.php';

$Nama=$_POST['Nama'];
$NIM=$_POST['NIM'];
$Kelas=$_POST['Kelas'];
$Jenis_Kelamin=$_POST['Jenis_Kelamin'];
$Hobi=$_POST['Hobi'];
$Fakultas=$_POST['Fakultas'];
$Alamat=$_POST['Alamat'];

$sql = "INSERT INTO pendaftaran(Nama, NIM, Kelas, Jenis_Kelamin, Hobi, Fakultas, Alamat)
VALUES ('$Nama', '$NIM', '$Kelas', '$Jenis_Kelamin', '$Hobi', '$Fakultas', '$Alamat')";
echo $sql;

if (mysqli_query($conn, $sql)){
	header("Location:login.php");
	}else{
		echo "Error, :".$sql."<br>".mysqli_error($conn);
	}

mysqli_close($conn);
?> 