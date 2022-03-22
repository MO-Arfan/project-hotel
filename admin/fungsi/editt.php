<?php

	include"koneksi.php";

	if (isset($_POST['submit'])) {

	$id=$_POST['id'];
    $nama=mysqli_real_escape_string($koneksi,$_POST['nama']);
	$user=mysqli_real_escape_string($koneksi,$_POST['username']);
	$lamat=mysqli_real_escape_string($koneksi,$_POST['alamat']);
	$email=mysqli_real_escape_string($koneksi,$_POST['email']);
	$nom=mysqli_real_escape_string($koneksi,$_POST['no_telp']);

	$data = mysqli_query($koneksi,"UPDATE tamu SET
							nama = '$nama',
							username = '$user',
							alamat = '$lamat',
							email = '$email',
							telepon = '$nom' 
							WHERE idtamu = '$id'");
	$query = mysqli_query($koneksi,"SELECT * FROM tamu WHERE idtamu = '$id'");

	$cek = mysqli_num_rows($query);

	if ($cek > 0) {
		echo "<script>alert('Data berhasil diubah!');window.location='../daftartamu.php'</script>";
    	exit;
	}else{
		echo "<script>alert('Data gagal diubah!');window.location='../daftartamu.php'</script>";
    	exit;
	}
}

  ?>