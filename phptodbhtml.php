<?php include 'koneksi.php'; ?>

		<style type="text/css">
          tr {
            color:black; 
          }
          table {
            width: 50%;
          }
      </style>
      <body style="background-size: cover; background:orange;" >
      
      
      <div style="text-align:center;">
       
        <?php 
         $query = "SELECT * from datapasien ORDER BY id asc";
         $result = mysqli_query($koneksi, $query);
         $data = mysqli_fetch_array($result);
          echo"Data Pemantauan Covid-19"."<br>";
          echo $data['namawilayah']." ";
          echo $data['namaoperator']. " ";
          echo $data['nimmahasiswa'];
          echo "<td> Per ".date('d F Y h:i:s', time())."<br>";
         
        ?>

        <table border=1 align="center" style="text-align:center">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Wilayah</th>
            <th>POSITIF</th>
            <th>DIRAWAT</th>
            <th>SEMBUH</th>
            <th>MENINGGAL</th>
            <th>Action</th>
          </tr>
          </thead>

       <?php 
         $query = "SELECT * from datapasien ORDER BY id asc";
         $result = mysqli_query($koneksi, $query);

         $no = 0;
         while ($data = mysqli_fetch_array($result)) {
           $no++;
        ?>
      
          <tbody>
            <tr>
              <td><?= $no; ?></td>
              <td><?= $data['namawilayah']; ?></td>
              <td><?= $data['jmlpositif']; ?></td>
              <td><?= $data['jmldirawat']; ?></td>
              <td><?= $data['jmlsembuh']; ?></td>
              <td><?= $data['jmlmeniggal']; ?></td>
              <td>
                <a href="Delete.php?id=<?=$data['id']?>">Delete</a>
                <a href="update.php?id=<?=$data['id']?>">Update</a>
              </td>
            </tr>
          </tbody>
      <?php } ?>
        </table>
        <a href="export.php"><input type="submit" name="cetak" value="Download PDF"></a>
      </div> 

</body>

   		