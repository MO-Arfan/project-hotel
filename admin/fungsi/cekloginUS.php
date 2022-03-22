<?php
session_start();

include "koneksi.php";

$user=$_POST['username'];
$pass=md5($_POST['password']);

$data=mysqli_query($koneksi,"SELECT * FROM login WHERE username='$user' AND password='$pass'");

$cek=mysqli_num_rows($data);

if ($cek > 0) {

	$login = mysqli_fetch_assoc($data);

	if($login['level']=="admin"){
		// buat session login dan username
		$_SESSION['login'] = true;
		$_SESSION['username'] = $user;

		// alihkan ke halaman dashboard admin
	echo "<script>alert('Login Sukses!');window.location='../'</script>";
    exit;
    	}

	else if($login['level']=="petugas"){
		// buat session login dan username
		$_SESSION['login2'] = true;
		$_SESSION['username'] = $user;

		// alihkan ke halaman dashboard pegawai
	echo "<script>alert('Login Sukses!');window.location='../indexp.php'</script>";
    exit;
    	}

		}


else{

		// alihkan ke halaman login kembali
		header("location:../login.php?pesan=gagal");
		exit;
	}

?>

<?php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from tb_identitas where username='$username' and password='$password'");
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
		header("location:halaman_admin.php");

	// cek jika user login sebagai pegawai
	}else if($data['level']=="petugas"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_petugas.php");
		}
		else if($data['level']=="tamu"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tamu";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_tamu.php");
	}

		else{

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
?>