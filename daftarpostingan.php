<?php  

include 'db.php';
include 'semuaposting.php';

?>
<html>
<head>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Posting</th>
				<th>Gambar</th>
				<th>Action</th>
			</tr>
</head>
<body>
<?php

$sql = "SELECT * FROM posting";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id=$row['id'];
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['postingan']."</td>";
		echo "<td>".$row['dokumen']."</td>";	

		echo "<td>"."<a href='edithasil.php?id=$id'>Edit</a>"."</td>";			

		echo "</tr>";
	}
}else{
	echo "0 result";
}
mysqli_close($conn);

?>
</body>
</table>
</html>