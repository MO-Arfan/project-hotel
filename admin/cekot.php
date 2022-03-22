<?php 
include 'fungsi/koneksi.php';

	// $data = mysqli_query($koneksi,"SELECT * FROM kamar INNER JOIN pemesanan on kamar.tipe = pemesanan.tipe WHERE idpesan = '$id'");
	// $query = "UPDATE pemesanan SET status = 'Terkonfirm' where idpesan = '$id'";
	// $cek = mysqli_num_rows($data);
	$id = $_GET['id'];

	$data = mysqli_query($koneksi,"SELECT * FROM pemesanan INNER JOIN kamar on pemesanan.tipe = kamar.tipe WHERE idpesan = '$id'");
	$tipe = "SELECT tipe FROM pemesanan WHERE idpesan = '$id'";
	$query = "UPDATE pemesanan SET status = 'check out' where idpesan = '$id'";

	$cek = mysqli_num_rows($data);

	if ($cek > 0) {
		$d = mysqli_fetch_array($data);
		$h = $d['stok'] - $d['jumlah'];
		if ($h > 0) {
			if (mysqli_query($koneksi,$query)) {
				mysqli_query($koneksi,"UPDATE kamar SET stok = '$h' WHERE tipe = '$tipe'");
				echo "<script>alert('Check out Berhasil');window.location='javascript:history.back()';</script>";
				exit;
			}else{
				echo "<script>alert('Gagal Check out');window.location='javascript:history.back()';</script>";
				exit;
			}
		}else{
			echo "<script>alert('Stok');window.location='javascript:history.back()';</script>";
			exit;
		}
	}else{
		echo "<script>alert('Terjadi kesalahan data');window.location='javascript:history.back()';</script>";
		exit;
	}

?>