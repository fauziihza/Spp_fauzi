<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'Connect.php';

  // membuat variabel untuk menampung data dari form
  $id_spp = $_POST['id_spp']; 
  $kompetensi_keahlian = $_POST['kompetensi_keahlian'];
  $nominal   = $_POST['nominal'];

  //cek dulu jika merubah gambar produk jalankan coding ini
  
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "INSERT INTO spp VALUES('$id_spp','$kompetensi_keahlian','     $nominal')";
                    $result = mysqli_query($koneksi, $query);
            
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='spp.php';</script>";
                    }
              
        
        ?>
      