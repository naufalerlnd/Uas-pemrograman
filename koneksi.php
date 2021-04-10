<?php 
	
	$servername = "localhost";
	$user = "root";
	$password = "";
	$database = "data_pasien";

	$koneksi = mysqli_connect($servername, $user, $password, $database);

	if (!$koneksi) {
		die("Gagal Terhubung Dengan Database".mysqli_error());
	}

 ?>