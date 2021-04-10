<?php 
	include 'koneksi.php';
	if (isset($_POST['tambah'])) {
		$namaWilayah = $_POST['wilayah'];
		$jumlahpositif =$_POST['jmlpositif'];
		$jumlahdirawat =$_POST['jmldirawat'];
		$jumlahsembuh =$_POST['jmlsembuh'];
		$jumlahmeninggal =$_POST['jmlmeninggal'];
		$operator = $_POST['nmoperator'];
		$nimmhs = $_POST['nim_mahasiswa'];


	$query = "INSERT into datapasien (namawilayah,jmlpositif,jmldirawat,jmlsembuh,jmlmeniggal,namaoperator,nimmahasiswa) values ('$namaWilayah','$jumlahpositif','$jumlahdirawat','$jumlahsembuh','$jumlahmeninggal','$operator','$nimmhs')"; 
		$result = mysqli_query($koneksi, $query);

		if ($result) {
			header("location:phptodbhtml.php");
		}
	}


 ?>