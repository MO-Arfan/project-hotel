<?php
session_start();

include'../fungsi/koneksi.php';

if (!isset($_SESSION['logint'])) {
    echo "<script>alert('Login Dulu Bang!');window.location='../logint.php'</script>";
    exit;
}
if (isset($_SESSION['logint'])) {
	
	$n=$_SESSION['username'];
	$nama= mysqli_query($koneksi,"SELECT * FROM tamu WHERE username = '$n'");
	$m= mysqli_fetch_array($nama);
	$k= $m['nama'];
	$i= $m['idtamu'];
	$cekin=mysqli_real_escape_string($koneksi,$_POST['cekin']);
	$cekout=mysqli_real_escape_string($koneksi,$_POST['cekout']);
	$tipe=mysqli_real_escape_string($koneksi,($_POST['tipe']));
	$t= mysqli_query($koneksi,"SELECT * FROM kamar WHERE tipe = '$tipe'");
	$o= mysqli_fetch_array($t);
	$p= $o['id_kamar'];
	$jumlah=mysqli_real_escape_string($koneksi,$_POST['jumlah']);

	$query = "INSERT INTO pemesanan VALUES ('','$i','$k','$cekin','$cekout','$p','$tipe','$jumlah','pending')";

	if (mysqli_query($koneksi,$query)) {
		echo "<script>alert('Pemesanan Berhasil');window.location='datatransaksi.php';</script>";
		exit;
	}

	else{
		header("location:index.php");
		exit;
	}
}
?>

