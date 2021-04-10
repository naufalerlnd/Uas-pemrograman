<?php 
include 'koneksi.php'; 

$id_pasien = $_GET['id'];
$query = "DELETE from datapasien where id = '$id_pasien' ";
if ($result = mysqli_query($koneksi, $query)){
	include 'phptodbhtml.php';
}else {
	echo "error deleting";
}
mysqli_close($koneksi);
?>