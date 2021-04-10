<!DOCTYPE html>
<html>
<head>
	<title>UAS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	<div class="form-style-8">
  <h1>APLIKASI PEMANTAUAN COVID-19</h1>
  <form action="prosestambah.php" method="post">

  	<select name="wilayah">
  		<option>Wilayah</option>
  		<option value="DKI JAKARTA">DKI JAKARTA</option>
  		<option value="JAWA BARAT">JAWA BARAT</option>
  		<option value="BANTEN">BANTEN</option>
  		<option value="JAWA TENGAH">JAWA TENGAH</option>
  	</select>

    <input type="text" name="jmlpositif" placeholder="Jumlah Positif" />
    <input type="text" name="jmldirawat" placeholder="jumlah Dirawat" />
    <input type="text" name="jmlsembuh" placeholder="Jumlah Sembuh" />
    <input type="text" name="jmlmeninggal" placeholder="Jumlah Meninggal" />
    <input type="text" name="nmoperator" placeholder="Nama Operator" />
    <input type="text" name="nim_mahasiswa" placeholder="NIM" />
    <input type="submit" value="Tambah Data" name="tambah" />
  </form>
</div>
</body>
</html>