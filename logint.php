<?php
session_start();

if (isset($_SESSION['logint'])) {
    header("location:user/");
    exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="login.css">
		<link rel="icon" href="img/sic.png" type="image/png">
		<title>Login Tamu</title>
	</head>
	<body>

		<?php 
	  if(isset($_GET['pesan'])){
	    if($_GET['pesan']=="gagal"){
	      echo "<script>alert('username atau password salah');</script>";
		}
	    }
	  
	  ?>


	<div style="margin-top: 100px;" class="container">
		<div class="row">	
			<div class="col-md-12">
				<div class="card mb-5">
					<div class="card-header">
						<h4 class="text-center">LOGIN</h4>
					</div>
					<div class="card-body">
						<form method="post" action="fungsi/cekloginTM.php">
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="username" autocomplete="off" autofocus>
						</div>
						<div class="form-group mt-3">
							<input type="password" name="password" class="form-control" placeholder="password">
						</div><br>
						<button class="btn btn-success col-md-12" type="submit">LOGIN</button>
						</form><br>
						<h6 class="text-center">Belum punya akun? <a href="pendaftaran.php">REGISTRASI</a></h5>

					</div>
				</div>
								<a href="index.php"><button class="btn btn-primary col-md-12">HOME</button></a>

			</div>
		</div>
	</div>

	<script src="js/bootstrap.min.js"></script>
	</body>
</html>