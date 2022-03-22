<?php
session_start();

include "koneksi.php";

$user=$_POST['username'];
$pass=md5($_POST['password']);

$data=mysqli_query($koneksi,"SELECT * FROM tamu WHERE username='$user' AND password='$pass'");

$cek=mysqli_num_rows($data);

if ($cek > 0) {
	$_SESSION['logint'] = true;
	$_SESSION['username'] = $user;

	// alihkan ke halaman dashboard pegawai
	echo "<script>alert('Login Sukses!, selamat datang ');window.location='../user'</script>";
    exit;
		}


else{

		// alihkan ke halaman login kembali
		header("location:../logint.php?pesan=gagal");
		exit;
	}

?>


