<?php  

include 'db.php';
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){

	$NIM=strlen($_POST['NIM'])?$_POST['NIM']:"Inputan tidak boleh kosong";
	$Password=strlen($_POST['Password'])?$_POST['Password']:"Inputan tidak boleh kosong";
	if ($sql=mysqli_query($conn, "SELECT * FROM pendaftaran WHERE Nama='$Nama' && NIM ='$NIM'")){
		$num=mysqli_num_rows($sql);
		$_SESSION['NIM']=$NIM;
		header("Location:halamanawal.php");
	} else {
		echo "Error";
	}
}
	
?>