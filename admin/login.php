<?php
session_start();

if (isset($_SESSION['login'])) {
    header("location:index.php");
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
		<link rel="icon" href="../img/sic.png" type="image/png">
		<title>Login Reservasi</title>
	</head>
	<body>


		<?php 
	  if(isset($_GET['pesan'])){
	    if($_GET['pesan']=="gagal"){
	      echo "<script>alert('username atau password salah');</script>";
		}
	    }
	  
	  ?>


	<div class="container">
		<div class="row">	
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="text-center">PETUGAS</h4>
						<h5 class="text-center text-muted">ADMIN</h5>
					</div>
					<div class="card-body">
						<form method="post" action="fungsi/cekloginUS.php">
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="username" autocomplete="off" autofocus>
						</div>
						<div class="form-group mt-3">
							<input type="password" name="password" class="form-control" placeholder="password">
						</div><br>
						<button class="btn btn-success col-md-12" type="submit">LOGIN</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/bootstrap.min.js"></script>
	</body>
</html>