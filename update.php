<?php  

include 'db.php';

$Nama=$_POST['Nama'];
$NIM=$_POST['NIM'];
$Kelas=$_POST['Kelas'];
$Jenis_Kelamin=$_POST['Jenis_Kelamin'];
$Hobi=$_POST['Hobi'];
$Fakultas=$_POST['Fakultas'];
$Alamat=$_POST['Alamat'];

$sql="UPDATE pendaftaran SET Nama='$Nama', Kelas='$Kelas', Jenis_Kelamin='$Jenis_Kelamin', Hobi='$Hobi', Fakultas='$Fakultas', Alamat='$Alamat' where NIM='$NIM'";
mysqli_query($conn, $sql);
header("Location:halamanawal.php");

?>