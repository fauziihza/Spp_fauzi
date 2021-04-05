<?php	
include('Connect.php');
?>

<head>
	<title>Kelas</title>
</head>
<body>
	<?php

	include ('FormHome.php')
	?>

	<center><h1>Data Kelas SMK MAHARDIKA</h1></center>

	<center><a href="tambah_kelas.php"> Tambah kelas</a></center>
	<br>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id_kelas</th>
      <th scope="col">nama_kelas</th>
      <th scope="col">kompetensi_keahlian</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$query = "SELECT * FROM kelas ORDER BY id_kelas ASC";
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
          <td><?= $row['id_kelas']; ?></td>
           <td><?php echo $row['nama_kelas']; ?></td>
          <td><?php echo $row['kompetensi_keahlian']; ?></td>
          <td>
              <a href="editkelas.php?id=<?php echo $row['id_kelas']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id_kelas']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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