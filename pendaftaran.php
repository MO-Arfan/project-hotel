<?php
include'fungsi/koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="pendaf.css">
	<link rel="icon" href="img/sic.png" type="image/png">

	<title>Pendaftaran pengguna</title>
</head>
<body>
	<?php 
	  if(isset($_GET['pesan'])){
	    if($_GET['pesan']=="psw"){
	      echo "<script>alert('password tidak sesuai!');</script>";
		}
		if($_GET['pesan']=="usn"){
	      echo "<script>alert('username telah dipakai seseorang!');</script>";
		}
		if($_GET['pesan']=="ksl"){
	      echo "<script>alert('terjadi kesalahan!');</script>";
		}
	    }
	  
	  ?>
	<div class="container">
		<h2 class="alert alert-warning text-center mt-5">PENDAFTARAN PENGGUNA</h2>

		<form method="post" action="fungsi/cekpendaf.php">
			<div class="form-group">
				<label for="namalengkap">Nama lengkap</label>
				<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama lengkap" id="namalengkap" required="required" autocomplete="off" autofocus>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="Username">Username</label>
						<input type="text" name="username" class="form-control" placeholder="Username" id="Username" required="required" autocomplete="off">
					</div>
				</div>
			
				<div class="col-md-3">
					<div class="form-group">
						<label for="Password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" id="Password" required="required">
					</div>
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label for="CPassword">Konfirmasi Password</label>
						<input type="password" name="cpassword" class="form-control" placeholder="Konfirmasi Password" id="CPassword" required="required">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea class="form-control" name="alamat" id="alamat" required="required"></textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control col-md-6" placeholder="Email" id="email" required="required" autocomplete="off">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="notelp">Nomor Telp</label>
						<input type="text" name="no_telp" class="form-control col-md-6" placeholder="Nomor Telpon" id="notelp" required="required" autocomplete="off">
					</div>
				</div>
			</div><br>

			<button type="submit" class="btn btn-success" name="submit">SIMPAN</button>
			<button type="reset" class="btn btn-danger">RESET</button>

		</form>
		<center><a class="kembali" href="javascript:history.back()"><button style="margin-top: 20px; " class="btn btn-primary col-md-6 ">KEMBALI</button></a></center>
	</div>


	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

</body>
</html>