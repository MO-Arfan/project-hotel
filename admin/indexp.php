<?php
session_start();
include 'fungsi/koneksi.php';

if (!isset($_SESSION['login2'])) {
	echo "<script>alert('Silahkan Login Terlebih dahulu');window.location='login.php'</script>";
	//header("location:login.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="adm.css">
	<link rel="icon" href="../img/sic.png" type="image/png">

	<title>Petugas Dashboard</title>
</head>
<body>
	<!-- navbar atas -->

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	  	<div class="container-fluid">
	    	<a class="navbar-brand" href="#"><span style="font-weight:bold; text-transform: uppercase;"><?php
		     $nama=$_SESSION['username'];
		     $l=mysqli_query($koneksi,"SELECT level FROM login WHERE username = '$nama'");
		     $n=mysqli_fetch_array($l);
		     echo $n['level'];
		     ?></span> | <b>HOTEL TRANSYLVANIA</b> </a>
	    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    		<ul class="nav nav-tabs me-auto mb-2 mb-lg-0">
					  <li class="nav-item">
					    <a class="nav-link active" aria-current="page" href="indexp.php">Dashboard</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="petugas.php">Pemesanan</a>
					  </li>

					  <li class="nav-item">
					    <a class="nav-link" href="daftartransaksip.php">Transaksi</a>
					  </li>
					</ul>
					<a class="navbar-brand">#<?php
		             $nama=$_SESSION['username'];
		             echo "$nama"
		             ?></a>
					<form class="d-flex">
				        <a href="logout.php" class="btn btn-primary btn-sm" type="submit">Log Out</a>
				    </form>
	    	</div>
	  	</div>
	</nav>

	<!-- akhir navbar atas -->



	<!-- sidebar -->

	

	<!-- akhir sidebar -->


	<!-- isi -->
<div style="margin-top:100px; width: 500px;" class="container">
	<div style="border:0; height:500px" class="card text-center" >
	  <div class="card-header text-muted">
	  </div>
	  <div class="card-body">
	    <h5 class="card-title">Selamat Datang</h5>
	    <h1 style="text-transform:uppercase;"><?php
		     $nama=$_SESSION['username'];
		     echo "$nama"
		     ?></h1>
	    <img style="width: 140px; height: 200px;" src="../img/sic.png">
	    <h5 class="card-text mt-3 mb-5">Utamakan keselamatan bekerja ya.</h5>
	    <a href="logout.php" class="btn btn-primary" type="submit">Log Out</a>
	  </div>
	  <div class="card-footer text-muted">
	  </div>
	</div>
</div>

	<!-- akhir isi -->

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>