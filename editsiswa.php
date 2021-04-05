<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'Connect.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM siswa WHERE nisn='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='siswa.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='siswa.php';</script>";
    
     }?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  </head>
  <body>
    
  
        <h2 class="text-center">Edit siswa</h2>
      <form method="POST" action="proses_editsiswa.php" enctype="multipart/form-data" >
      <section class="base">
     
           <input name="nisn" value="<?php echo $data['nisn']; ?>"  hidden />
              <div class="form-group">
    <label for="text">nis</label>
    <input type="text" name="nis" class="form-control" value="<?php echo $data['nis']; ?>" id="nis">
  </div>
  <div class="form-group">
    <label for="text">nama</label>
    <input type="text" class="form-control" name="nama"
    value="<?php echo $data['nama']; ?>" required="" id="nama"> 
  </div> 
    <div class="form-group">
    <label for="text">id_kelas</label>
    <input type="text" class="form-control" name="id_kelas"
    value="<?php echo $data['id_kelas']; ?>" required="" id="id_kelas"> 
  </div> 
  <div class="form-group">
    <label for="text">alamat</label>
    <input type="text" class="form-control" name="alamat"
    value="<?php echo $data['alamat']; ?>" required="" id="alamat"> 
  </div> 
  <div class="form-group">
    <label for="text">no_telp</label>
    <input type="text" class="form-control" name="no_telp"
    value="<?php echo $data['no_telp']; ?>" required="" id="no_telp"> 
  </div> 
  <div class="form-group">
    <label for="text">id_spp</label>
    <input type="text" class="form-control" name="id_spp"
    value="<?php echo $data['id_spp']; ?>" required="" id="id_spp"> 
  </div> 

        <div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </section>
      </form>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>