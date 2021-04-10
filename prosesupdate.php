<?php  
	include 'koneksi.php';

	if (isset($_POST['update'])) { 
		$idpasien =$_POST['idpasien'];
		$namaWilayah = $_POST['wilayah'];
		$jumlahpositif =$_POST['jmlpositif'];
		$jumlahdirawat =$_POST['jmldirawat'];
		$jumlahsembuh =$_POST['jmlsembuh'];
		$jumlahmeninggal =$_POST['jmlmeninggal'];
		$operator = $_POST['nmoperator'];
		$nimmhs = $_POST['nim_mahasiswa'];

		$query = "UPDATE datapasien set namawilayah = '$namaWilayah', jmlpositif = '$jumlahpositif', jmldirawat ='$jumlahdirawat', jmlsembuh = '$jumlahsembuh', jmlmeniggal = '$jumlahmeninggal', namaoperator = '$operator', nimmahasiswa = '$nimmhs' where id = '$idpasien' ";
		$result = mysqli_query($koneksi, $query);
		if ($result) {
			header("location:phptodbhtml.php");
		}
	}


?>