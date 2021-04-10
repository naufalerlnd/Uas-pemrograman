<?php include'koneksi.php'; ?>
<?php 
  $id_pasien = $_GET['id'];
  $query = "SELECT * from datapasien where id ='$id_pasien'";
  $result = mysqli_query($koneksi, $query);
  while ($data = mysqli_fetch_array($result)) :?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	<div class="form-style-8">
  <h1>APLIKASI PEMANTAUAN COVID-19</h1>
  <form action="prosesupdate.php" method="POST">
    <label>Id</label>
    <input type="text" name="idpasien" value="<?= $data['id'];?>" >
  	<select name="wilayah">
  		<option><?= $data['namawilayah']; ?></option>
  		<option value="DKI JAKARTA" >DKI JAKARTA</option>
  		<option value="JAWA BARAT">JAWA BARAT</option>
  		<option value="BANTEN">BANTEN</option>
  		<option value="JAWA TENGAH">JAWA TENGAH</option>
  	</select>

    <input type="text" name="jmlpositif" placeholder="Jumlah Positif" value="<?= $data['jmlpositif']; ?>" />
    <input type="text" name="jmldirawat" placeholder="jumlah Dirawat" value="<?= $data['jmldirawat']; ?>" />
    <input type="text" name="jmlsembuh" placeholder="Jumlah Sembuh" value="<?= $data['jmlsembuh']; ?>" />
    <input type="text" name="jmlmeninggal" placeholder="Jumlah Meninggal" value="<?= $data['jmlmeniggal']; ?>" />
    <input type="text" name="nmoperator" placeholder="Nama Operator" value="<?= $data['namaoperator']; ?>" />
    <input type="text" name="nim_mahasiswa" placeholder="NIM" value="<?= $data['nimmahasiswa']; ?>" />
    <input type="submit" value="Update Data" name="update" />
  </form>
<?php endwhile ?>
</div>
</body>
</html>