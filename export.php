<?php 
include 'koneksi.php';

require_once _DIR_.'mpdf_v8.0.3-master/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
ob_start(); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Export Pdf</title>
</head>
<body>
	  <div>
	  		<h1 align="center">Data Pasien</h1>
                <table border="1">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Wilayah</th>
                    <th>POSITIF</th>
                    <th>DIRAWAT</th>
                    <th>SEMBUH</th>
                    <th>MENINGGAL</th>
                  </tr>
                  </thead>
                  <tbody>
                     
	                <?php
						$sql="SELECT * from datapasien";
						$query=mysqli_query($koneksi, $sql) or die(mysqli_error());
					while ($data=mysqli_fetch_array($query)) {
					?>
                     <tr> 
                       <td><?= $data['id']; ?></td>
                       <td><?= $data['namawilayah']; ?></td>
                       <td><?= $data['jmlpositif']; ?></td>
                       <td><?= $data['jmldirawat']; ?></td>
                       <td><?= $data['jmlsembuh']; ?></td>
                       <td><?= $data['jmlmeniggal']; ?></td>           
                     </tr>

                     <?php } ?>
                  </tbody>
                </table>
              </div>
</body>
</html>
<?php
	$html = ob_get_contents(); 
	ob_end_clean();
	$mpdf->WriteHTML(utf8_encode($html));
	$mpdf->Output("laporanpasien.pdf" ,'I');
?>