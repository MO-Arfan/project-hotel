<?php

	include"koneksi.php";

	if (isset($_POST['submit'])) {

	$tipe=mysqli_real_escape_string($koneksi,$_POST['tipe']);
	$harga=mysqli_real_escape_string($koneksi,$_POST['harga']);
	$stok=mysqli_real_escape_string($koneksi,$_POST['stok']);
	$fas=mysqli_real_escape_string($koneksi,$_POST['fas']);
	$n = $_FILES['gambar']['name'];
	$u = $_FILES['gambar']['size'];
	$e = $_FILES['gambar']['error'];
	$t = $_FILES['gambar']['tmp_name'];

	if($e === 4){
		echo "<script>alert('Pilih gambar terlebih dahulu!');window.location='javascript:history.back()'</script>";
    	exit;
	}

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

	$data = mysqli_query($koneksi,"INSERT INTO kamar VALUES ('','$tipe','$stok','$harga','$gambar','$fas')");
	$query = mysqli_query($koneksi,"SELECT * FROM kamar");			

	$cek = mysqli_num_rows($query);

	if ($cek > 0) {
		echo "<script>alert('Data berhasil ditambah!');window.location='../daftarkamar.php'</script>";
    	exit;
	}else{
		echo "<script>alert('Data gagal ditambah!');window.location='../daftarkamar.php'</script>";
    	exit;
	}
}

  ?>