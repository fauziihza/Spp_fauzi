<?php
include('Connect.php');
?>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	<?php
	include ('FormHome.php');
	?>
	<center><H2>laporan</H2></center>
	<form method="POST" action="proses_laporan.php" enctype="multipart/form-data">
		<section class="base">
	<body>
	<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">Dari tanggal</span>
  </div>
  <input type="date" class="daritanggal" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
</body></head>
<body>
	<div class="input-group input-group-sm mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-sm">sampai tanggal</span>
  </div>
  <input type="date" class="daritanggal" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
</div>
</body>
 <button type="submit" class="btn btn-primary" >ekspor ke word</button></a>
</body>
