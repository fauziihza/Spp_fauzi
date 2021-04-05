<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'Connect.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nis= $_POST['nis'];

// menyeleksi data admin dengan nama dan nis yang sesuai
$data = mysqli_query($koneksi,"select * from siswa where nama='$nama' and nis='$nis'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['nama'] = $username;
	$_SESSION['level'] = "siswa";
	header("location:Dashboard.php");
}else{
	header("location:formloginsiswa.php?pesan=gagal");
}
?>