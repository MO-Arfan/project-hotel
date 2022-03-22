<?php 

include'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "DELETE FROM tamu WHERE idtamu = '$id'");
$query = mysqli_query($koneksi, "SELECT * FROM tamu WHERE idtamu = '$id'");

$cek = mysqli_num_rows($query);

if ($cek == 0) {
	echo "<script>alert('Data berhasil dihapus!');window.location='../daftartamu.php'</script>";
                exit;
}else{
	echo "<script>alert('Data gagal dihapus!');window.location='../daftartamu.php'</script>";
                exit;
}
?>