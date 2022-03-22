<?php

	include"koneksi.php";

	if (isset($_POST['submit'])) {

	$id = $_POST['id'];
	$nama=mysqli_real_escape_string($koneksi,$_POST['nama']);
	$des=mysqli_real_escape_string($koneksi,$_POST['des']);
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


	$data = mysqli_query($koneksi,"UPDATE fasilitas SET
							namafas = '$nama',
							deskrip = '$des',
							gambar = '$pot'
							WHERE idfasilitas = '$id'");


	$query = mysqli_query($koneksi,"SELECT * FROM fasilitas");			

	$cek = mysqli_num_rows($query);

	if ($cek > 0) {
		echo "<script>alert('Data berhasil diubah!');window.location='../daftarfasilitas.php'</script>";
    	exit;
	}else{
		echo "<script>alert('Data gagal diubah!');window.location='../daftarfasilitas.php'</script>";
    	exit;
	}
}

  ?>