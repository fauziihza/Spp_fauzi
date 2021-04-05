<?php
	include('Connect.php')
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
		include('FormHome.php')
		?>
		<center>Data SPP</center>
		<center><a href="tambah_spp.php"> Tambah kelas</a></center>
	<br>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_spp</th>
      <th scope="col">kompetensi_keahlian</th>
      <th scope="col">nominal</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$query = "SELECT * FROM spp ORDER BY id_spp ASC";
  	$result =mysqli_query($koneksi, $query);
  	if (!$result) {
  		  die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?= $row['id_spp']; ?></td>
           <td><?php echo $row['kompetensi_keahlian']; ?></td>
          <td><?php echo $row['nominal']; ?></td>
          <td>
              <a href="editspp.php?id=<?php echo $row['id_spp']; ?>">Edit</a> |
              <a href="proses_hapusspp.php?id=<?php echo $row['id_spp']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
  	}
    

    ?>
  </tbody>
</table>

	
	</body>
	</html>