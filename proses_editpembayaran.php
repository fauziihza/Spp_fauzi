<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'Connect.php';

  // membuat variabel untuk menampung data dari form
  $id_pembayaran = $_POST['id_pembayaran']; 
  $id_petugas = $_POST['id_petugas'];
  $nisn   = $_POST['nisn'];
  $tgl_bayar = $_POST['Tgl_bayar']; 
  $bulan_bayar = $_POST['Bulan_dibayar'];
  $tahun_dibayar = $_POST['tahun_dibayar']; 
  $id_spp = $_POST['id_spp'];
  $jumlah_bayar = $_POST['jumlah_bayar'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE siswa SET id_petugas = '$id_petugas',nisn='$nisn',Tgl_bayar = '$tgl_bayar',Bulan_dibayar = '$bulan_bayar',
                    tahun_dibayar = '$tahun_dibayar',
                    id_spp = '$id_spp',
                    jumlah_bayar = '$jumlah_bayar' 
                    WHERE id_pembayaran = '$id_pembayaran'";
                    $result = mysqli_query($koneksi, $query);
            
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='form_pembayaran.php';</script>";
                    }
              
        
        ?>
      