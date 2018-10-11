<?php

include 'db.php';
include 'semuaposting.php';

$id = $_POST['id'];
$postingan = $_POST['postingan'];
$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "upload/";
move_uploaded_file ($nama_tmp,$upload_dir.$nama_file);



$sql = "INSERT INTO posting(id, postingan, dokumen)
VALUES ('$id','$postingan','$dokumen')";
echo $sql;

if (mysqli_query($conn, $sql)){
	header("Location:daftarpostingan.php");
	}else{
		echo "Error, :".$sql."<br>".mysqli_error($conn);
	}

mysqli_close($conn);

?>
<img src="upload/<?php echo $nama_file; ?>">