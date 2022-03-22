<?php

	include"koneksi.php";

	if (isset($_POST['submit'])) {

	$user=mysqli_real_escape_string($koneksi,$_POST['username']);
	$level=mysqli_real_escape_string($koneksi,$_POST['level']);
	$pass=mysqli_real_escape_string($koneksi,md5($_POST['password']));

		$sql = "SELECT * FROM login WHERE username ='$user'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO login VALUES ('','$user','$pass','$level')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Data berhasil ditambah!');window.location='../daftarpetugas.php'</script>";
                exit;
            } else {
                echo "<script>alert('Data gagal ditambah!');window.location='../daftarpetugas.php'</script>";
                exit;
            }
        } else {
            echo "<script>alert('username telah dipakai!');window.location='javascript:history.back()'</script>";
                exit;
        }

}

  ?>