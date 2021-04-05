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
	<h2 class="text-center">tambah_petugas</h2>
      <form method="POST" action="prosestambah_petugas.php" enctype="multipart/form-data" >
      <section class="base">
      	<div>
	<label for="text">Id_petugas</label>
    <input type="text" name="id_petugas" class="form-control"  id="id_petugas">
	</div>
	<div>
	<label for="text">username</label>
    <input type="text" name="username" class="form-control"  id="username">
  	</div>
  	<div class="form-group">
    <label for="text">password</label>
    <input type="text" class="form-control" name="password"required="" id="password"> 
    </div>
    <div class="form-group">
    <label for="text">nama_petugas</label>
    <input type="text" class="form-control" name="nama_petugas"required="" id="nama_petugas"> 
    </div>
    <div class="form-group">
    <label for="text">level</label>
    <input type="text" class="form-control" name="level"required="" id="level"> 
    </div>

     <button type="submit" class="btn btn-primary">Submit</button>
 
</body>
</html>