<?php

	include"koneksi.php";

	if (isset($_POST['submit'])) {

	$id = $_POST['id'];
	$tipe=mysqli_real_escape_string($koneksi,$_POST['tipe']);
	$harga=mysqli_real_escape_string($koneksi,$_POST['harga']);
	$stok=mysqli_real_escape_string($koneksi,$_POST['stok']);
	$fas=mysqli_real_escape_string($koneksi,$_POST['fas']);
	$e = $_FILES['gambar']['error'];

	if( $e === 4 ){
		$lama=mysqli_real_escape_string($koneksi,$_POST['old']);
		$gambar = $lama;
	}

	if( $e === 0){
		
	$n = $_FILES['gambar']['name'];
	$u = $_FILES['gambar']['size'];
	$t = $_FILES['gambar']['tmp_name'];

	$valid = ['jpg','jpeg','png'];
	$eks = explode('.', $n);
	$eks = strtolower(end($eks));

	if(!in_array($eks, $valid)){
		echo "<script>alert('file yang diupload tidak dimengerti!');window.location='javascript:history.back()'</script>";
    	exit;
	}

	if ($u > 10000000) {
		echo "<script>alert('file size terlalu besar!');window.location='javascript:history.back()'</script>";
    	exit;
	}

	$nbaru = uniqid();
	$nbaru .= '.';
	$nbaru .= $eks;

	move_uploaded_file($t, '../../img/'. $nbaru);

	$gambar= $nbaru;
	}

	$pot = $gambar;


	$data = mysqli_query($koneksi,"UPDATE kamar SET
							tipe = '$tipe',
							harga = '$harga',
							stok = '$stok',
							fasilitas = '$fas',
							gambar = '$pot'
							WHERE id_kamar = '$id'");


	$query = mysqli_query($koneksi,"SELECT * FROM kamar");			

	$cek = mysqli_num_rows($query);

	if ($cek > 0) {
		echo "<script>alert('Data berhasil diubah!');window.location='../daftarkamar.php'</script>";
    	exit;
	}else{
		echo "<script>alert('Data gagal diubah!');window.location='../daftarkamar.php'</script>";
    	exit;
	}
}

  ?>