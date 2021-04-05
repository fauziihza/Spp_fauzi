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
		<center>Data Petugas</center>
		<center><a href="tambah_petugas.<?php  ?>"> Tambah petugas</a></center>
	<br>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_petugas</th>
      <th scope="col">username</th>
      <th scope="col">password</th>

      <th scope="col">nama_petugas</th>
      <th scope="col">level</th>
      
    </tr>
  </thead>
  <tbody>
  	<?php
  	$query = "SELECT * FROM petugas ORDER BY id_petugas ASC";
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
          <td><?= $row['id_petugas']; ?></td>
           <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['password']; ?></td>
          <td><?php echo $row['nama_petugas']; ?></td>
          <td><?php echo $row['level']; ?></td>

          <td>
              <a href="editpetugas.php?id=<?php echo $row['id_petugas']; ?>">Edit</a> |
              <a href="proses_hapuspetugas.php?id=<?php echo $row['id_petugas']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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