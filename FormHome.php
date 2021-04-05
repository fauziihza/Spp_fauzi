<?php
  include('Connect.php');

  ?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>HOME</title>
    </head>
    <body>
       <?php 
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if ($_SESSION['level'] == 'siswa') {
      header("location: formhomesiswa.php");
    }
  elseif($_SESSION['level']==""){
    header("location:Formlogin.php?pesan=belummasuk");
  }

  ?>
      <?php
        if($_SESSION['level']=="admin"){
      ?>
    <h1 align="center">DASHBOARD ADMIN</h1>
      <p align="center"><h5 align="center">Halo <?php echo $_SESSION['username']; ?> Anda telah login sebagai <?php echo $_SESSION['level']; ?></h5>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Formhome.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
        
      <li class="nav-item">
        <a class="nav-link" href="kelas.php">Kelas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form_pembayaran.php">pembayaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formpetugas.php">Petugas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="siswa.php">Siswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="spp.php">spp</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="laporan.php">laporan</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Log Out</a>
      </li>

    </ul>
    </nav>

    <?php 
  }


      else if($_SESSION['level']=="petugas"){

   ?>
   <h1 align="center">DASHBOARD PETUGAS</h1>

  <p align="center"><h5 align="center">Halo <?php echo $_SESSION['username']; ?> Anda telah login sebagai <?php echo $_SESSION['level']; ?></h5></p>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Formhome.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form_pembayaran.php">Tranksaksi pembayaran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="laporan.php">laporan</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php" tabindex="-1" aria-disabled="true">Log Out</a>
      </li>
      <?php
    }
        else if($_SESSION['level']=="siswa"){

   ?>
   <h1 align="center"> PEMBAYARAN SPP</h1>

  <p align="center"><h5 align="center">Halo <b><?php echo $_SESSION['nama']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></h5></b></p>
          <a class="navbar-brand" href="Formhome.php">HOME</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
        <li class="nav-item">
        <a class="nav-link" href="form_pembayaran.php">lihat History pembayaran</a>
      </li>
      ?>
      <?php
    }
    ?>
    </ul>
  </div>
</nav>
</body>
</html>
