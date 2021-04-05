<?php
include('connect.php');


?>
<!DOCTYPE html>
<html>
<head>
	  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS --> <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
crossorigin="anonymous"> </head> <body> <h2
class="text-center">tambah_siswa</h2> <form method="POST"
action="proses_tambahsiswa.php" enctype="multipart/form-data" > <section
class="base"> <div> <label for="text">Nisn</label> <input type="text"
name="nisn" class="form-control"  id="nisn"> </div> <div> <label
for="text">nis</label> <input type="text" name="nis" class="form-control" 
id="nis"> </div> <div class="form-group"> <label for="text">nama</label>
<input type="text" class="form-control" name="nama"required="" id="nama"> 
</div> <div class="form-group"> <label for="text">id_kelas</label> <input
type="text" class="form-control" name="id_kelas"required="" id="id_kelas"> 
</div> <div class="form-group"> <label for="text">alamat</label> <input
type="text" class="form-control" name="alamat"required="" id="alamat">  </div>
<div class="form-group"> <label for="text">  no_telp</label> <input
type="text" class="form-control" name="no_telp"required="" id="no_telp"> 
</div> <div class="form-group"> <label for="text">id_spp</label> <input
type="text" class="form-control" name="id_spp" required="" id="id_spp "> 
</div>
    

     <button type="submit" class="btn btn-primary">Submit</button>
 </div>
</body>
</html>