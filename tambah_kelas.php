<?php
include('Connect.php');


?>
<!DOCTYPE html>
<html>
<head>
	  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<h2 class="text-center">tambah_kelas</h2>
      <form method="POST" action="proses_tambahkelas.php" enctype="multipart/form-data" >
      <section class="base">
      	<div>
	<label for="text">Id_kelas</label>
    <input type="text" name="id_kelas" class="form-control"  id="id_kelas">
	</div>
	<div>
	<label for="text">Kelas</label>
    <input type="text" name="nama_kelas" class="form-control"  id="nama_kelas">
  	</div>
  	<div class="form-group">
    <label for="text">kompetensi keahlian</label>
    <input type="text" class="form-control" name="kompetensi_keahlian"required="" id="kompetensi_keahlian"> 
    <div>

     <button type="submit" class="btn btn-primary">Submit</button>
 </div>
</body>
</html>