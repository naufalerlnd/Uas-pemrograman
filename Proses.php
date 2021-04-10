
<?php 
        if(isset($_POST["tambah"])){
          $myFile = fopen("data.txt", "w") ;
          fwrite($myFile, implode("|", $_POST));
          fclose($myFile);

          $content = file_get_contents("data.txt");
          $datas = explode("|", $content);
          
          $wilayah = $datas[0];
          $positif = $datas[1];
          $dirawat = $datas[2];
          $sembuh = $datas[3];
          $meninggal = $datas[4];
          $operator = $datas[5];
          $nim = $datas[6];
        
      ?>
      <style type="text/css">
          tr {
            color:black; 
          }
          table {
            width: 50%;
          }
      </style>
      <body style="background-size: cover; background:#2CBBBB;" >
      
      
      <div style="text-align:center;">
        <?php 
          echo "Data pemantauan Covid-19 Wilayah  ".$wilayah."<br>";
          echo "<td> Per ".date('d F Y h:i:s', time())."<br>";
          echo $operator."/".$nim."<br>";
        ?>

        <table border=1 align="center" style="text-align:center;">
        <thead>
          <tr>
            <th>POSITIF</th>
            <th>DIRAWAT</th>
            <th>SEMBUH</th>
            <th>MENINGGAL</th>
          </tr>
          </thead>

          <tbody>
            <tr>
              <td><?= $positif; ?></td>
              <td><?= $dirawat; ?></td>
              <td><?= $sembuh; ?></td>
              <td><?= $meninggal; ?></td>
            </tr>
          </tbody>
        </table>

      <?php } ?>
      </div>
</body>
</html>