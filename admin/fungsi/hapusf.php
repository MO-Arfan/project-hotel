<?php 

include'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "DELETE FROM fasilitas WHERE idfasilitas = '$id'");
$query = mysqli_query($koneksi, "SELECT * FROM fasilitas WHERE idfasilitas = '$id'");

$cek = mysqli_num_rows($query);

if ($cek == 0) {
	echo "<script>alert('Data berhasil dihapus!');window.location='../daftarfasilitas.php'</script>";
                exit;
}else{
	echo "<script>alert('Data gagal dihapus!');window.location='../daftarfasilitas.php'</script>";
                exit;
}
?>