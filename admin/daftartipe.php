<?php
session_start();

if (!isset($_SESSION['login'])) {
	header("location:login.php");
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
	<link rel="shortcut icon" href="../img/pngegg.png">

	<title>Admin Dashboard</title>
</head>
<body>
	<!-- navbar atas -->

	<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
	  	<div class="container-fluid">
	    	<a class="navbar-brand" href="#">ADMIN | <b>HOTEL TRANSYLVANIA</b> </a>
	  	</div>
	</nav>

	<!-- akhir navbar atas -->



	<!-- sidebar -->

	<div style="margin-left:50px; margin-top:90px;" class="row no-gutters ">
		<div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
			<ul class="nav flex-column ml-3 mb-5">
			  <li class="nav-item">
			    <a class="nav-link active text-white" aria-current="page" href="index.php">Dashboard</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="daftarkamar.php">Kamar</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="daftartipe.php">Tipe Kamar</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="daftartamu.php">Tamu</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="daftarpetugas.php">Petugas</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="daftartransaksi.php">Transaksi</a>
			</ul>
		</div>
		<div class="col-md-10"></div>
	</div>

	<!-- akhir sidebar -->


	<!-- isi -->

	<div class="card text-center" style="width: 950px; height: 440px; margin-top: -470px ; margin-left: 400px;">
	  <div class="card-header">
    Kamar
  </div>
  <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No.Kamar</th>
      <th scope="col">Tipe kamar</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	<td></td>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
    <tr>
    	<td></td>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
    	<td></td>
      <td>Larry</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
  </div>
	  <div class="card-footer text-muted">
	    2 days ago
	  </div>
	</div>


	<!-- akhir isi -->

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>