<?php 

include'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "DELETE FROM kamar WHERE id_kamar = '$id'");
$query = mysqli_query($koneksi, "SELECT * FROM kamar WHERE id_kamar = '$id'");

$cek = mysqli_num_rows($query);

if ($cek == 0) {
	echo "<script>alert('Data berhasil dihapus!');window.location='../daftarkamar.php'</script>";
                exit;
}else{
	echo "<script>alert('Data gagal dihapus!');window.location='../daftarkamar.php'</script>";
                exit;
}
?>