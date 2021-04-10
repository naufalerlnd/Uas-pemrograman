<?php 
	session_start();
	$form_error = '';

	if (isset($_POST['login'])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];
		if ($user == "kelompok1" && $pass == "12345") {
			$SESSION['username'] = $username;
			header("Location:UAS.php");
		}else {
			$form_error = '<p>Password atau email yang kamu masukkan salah</p>';
		}
	}



 ?>