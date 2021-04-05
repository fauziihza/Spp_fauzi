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
class="text-center">tambah_spp</h2> <form method="POST"
action="proses_tambahspp.php" enctype="multipart/form-data" > <section
class="base"> <div> <label for="text">id_spp</label> <input type="text"
name="id_spp" class="form-control"  id="id_spp"> </div> <div> <label
for="text">kompetensi_keahlian</label> <input type="text" name="kompetensi_keahlian" class="form-control" 
id="kompetensi_keahlian"> </div> 
<div class="form-group"> <label for="text">nominal</label>
<input type="text" class="form-control" name="nominal"required="" id="nominal"> 
</div> 
    

     <button type="submit" class="btn btn-primary">Submit</button>
 </div>
</body>
</html>