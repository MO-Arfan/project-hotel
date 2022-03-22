<?php

	include"koneksi.php";

	if (isset($_POST['submit'])) {

	$id=$_POST['id'];
	$user=mysqli_real_escape_string($koneksi,$_POST['username']);
	$level=mysqli_real_escape_string($koneksi,$_POST['level']);

	$data = mysqli_query($koneksi,"UPDATE login SET					
							username = '$user',
							level = '$level' 
							WHERE iduser = '$id'");
	$query = mysqli_query($koneksi,"SELECT * FROM login WHERE iduser = '$id'");

	$cek = mysqli_num_rows($query);

	if ($cek > 0) {
		echo "<script>alert('Data berhasil diubah!');window.location='../daftarpetugas.php'</script>";
    	exit;
	}else{
		echo "<script>alert('Data gagal diubah!');window.location='../daftarpetugas.php'</script>";
    	exit;
	}
}

  ?>