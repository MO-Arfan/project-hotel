<?php

include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama=mysqli_real_escape_string($koneksi,$_POST['nama']);
	$user=mysqli_real_escape_string($koneksi,$_POST['username']);
	$pass=mysqli_real_escape_string($koneksi,md5($_POST['password']));
	$lamat=mysqli_real_escape_string($koneksi,$_POST['alamat']);
	$email=mysqli_real_escape_string($koneksi,$_POST['email']);
	$nom=mysqli_real_escape_string($koneksi,$_POST['no_telp']);
	$cpass=mysqli_real_escape_string($koneksi,md5($_POST['cpassword']));
 
    if ($pass === $cpass) {
        $sql = "SELECT * FROM tamu WHERE username ='$user'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO tamu VALUES ('','$user','$email','$nama','$lamat','$nom','$pass')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!');window.location='../logint.php'</script>";
                exit;
            } else {
                header("location:../pendaftaran.php?pesan=ksl");
				exit;
            }
        } else {
            header("location:../pendaftaran.php?pesan=usn");
			exit;
        }
         
    } else {
        header("location:../pendaftaran.php?pesan=psw");
		exit;
    }
}




// $nama=mysqli_real_escape_string($koneksi,$_POST['nama']);
// $user=mysqli_real_escape_string($koneksi,$_POST['username']);
// $pass=mysqli_real_escape_string($koneksi,md5($_POST['password']));
// $lamat=mysqli_real_escape_string($koneksi,$_POST['alamat']);
// $email=mysqli_real_escape_string($koneksi,$_POST['email']);
// $nom=mysqli_real_escape_string($koneksi,$_POST['no_telp']);

// $query = "INSERT INTO tamu VALUES ('','$user','$email','$nama','$lamat','$nom','$pass')";



// if (mysqli_query($koneksi,$query)) {
// 	echo "<script>alert('Pendaftaran Berhasil';window.location='../logint.php');</script>";
// 	exit;
// }
// else{
// 	echo "<script>alert('Pendaftaran Gagal');</script>";
// 	exit;
// }

?>
