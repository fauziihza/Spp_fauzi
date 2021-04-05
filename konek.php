<?php 
include 'Connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"select * from petugas where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
if($cek > 0){

	$data = mysqli_fetch_assoc($query);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:dashboard.php");

	// cek jika user login sebagai petugas
	}else if($data['level']=="petugas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		// alihkan ke halaman dashboard petugas
		header("location:dashboard.php");


	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}

	
}else{
	header("location:index.php?pesan=gagal");
}
?>