		<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'Connect.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];


// menyeleksi data petugas dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from petugas where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:Dashboard.php");

	// cek jika user login sebagai petugas
	}else if($data['level']=="petugas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		// alihkan ke halaman dashboard petugas
		header("location:Dashboard.php");


	}else if($data['level']=="siswa"){
		// buat session login dan username
		$_SESSION['nama'] = $nama;
		$_SESSION['nama'] = "siswa";
		// alihkan ke halaman dashboard petugas
		header("location:Dashboard.php");


	}else{

		// alihkan ke halaman login kembali
		header("location:Formlogin.php?pesan=gagal");
	}

	
}else{
	header("location:Formlogin.php?pesan=gagal");
}



?>