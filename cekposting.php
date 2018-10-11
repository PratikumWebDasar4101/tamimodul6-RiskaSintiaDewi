<?php  

include 'db.php';
include 'semuaposting.php';

$posting=$_POST['posting'];

$string = "$posting";
$hasil = str_word_count($string);
echo "Jumlah : $hasil kata<br>";

echo "<br>Postingan : $posting<br><br>";

if ($hasil < 30) {	
	echo "<br>Maaf, kata yang Anda inputkan kurang.<br>";
}else{
	die (" ");
}

$file = $_FILES['dokumen'];
$nama_file = $file['name'];
$nama_tmp = $file['tmp_name'];
$upload_dir = "upload/";
move_uploaded_file ($nama_tmp,$upload_dir.$nama_file);

?>
<img src="upload/<?php echo $nama_file; ?>">
