<?php	
include('Connect.php')

?>
<!DOCTYPE html>
<html>

<body>
	<?php 
	include ('FormHome.php');



	 ?>
 

 		<center><h2>Data Siswa</h2></center>
 	<center><a href="tambah_siswa.php"> Tambah siswa</a></center>
	<br>
	<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">nisn</th>
      <th scope="col">nis</th>
      <th scope="col">nama</th>
      <th scope="col">id_kelas</th>
      <th scope="col">alamat</th>
      <th scope="col">no_telp</th>
      <th scope="col">id_spp</th>
    	
    </tr>
  </thead>
  <tbody>
  	<?php
  	$query = "SELECT * FROM siswa ORDER BY nisn ASC";
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
          <td><?= $row['nisn']; ?></td>
           <td><?php echo $row['nis']; ?></td>
          <td><?php echo $row['nama']; ?></td>
            <td><?= $row['id_kelas']; ?></td>
             <td><?= $row['alamat']; ?></td>
              <td><?= $row['no_telp']; ?></td>
               <td><?= $row['id_spp']; ?></td>

          <td>
              <a href="editsiswa.php?id=<?php echo $row['nisn']; ?>">Edit</a> |
              <a href="proseshapus_siswa.php?id=<?php echo $row['nisn']; ?>" onClick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
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