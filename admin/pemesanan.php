<?php
session_start();
include'fungsi/koneksi.php';

if (!isset($_SESSION['login'])) {
	header("location:login.php");
    exit;
}
$data = mysqli_query($koneksi,"SELECT * FROM pemesanan ORDER BY cekin ASC");
if(isset($_POST['cari'])){
	$key = $_POST['keyword'];
	$data = mysqli_query($koneksi,"SELECT * FROM pemesanan WHERE
																	nama LIKE '%$key%' OR
																	idpesan LIKE '%$key%' OR
																	tipe LIKE '%$key%' OR
																	jumlah LIKE '%$key%' OR
																	cekin LIKE '%$key%' OR
																	cekout LIKE '%$key%' OR
																	status LIKE '%$key%'
																	");
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

	<title>Admin Dashboard</title>
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
					    <a class="nav-link" href="index.php">Dashboard</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="daftarkamar.php">Kamar</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="daftarfasilitas.php">Fasilitas</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="daftartamu.php">Tamu</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="daftarpetugas.php">Petugas</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link active" aria-current="page" href="pemesanan.php">Pemesanan</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="daftartransaksi.php">Transaksi</a>
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
<div style="margin-top:100px; margin-bottom: 100px;" class="container">
	<div class="card text-center">
  <div class="card-header">
  	<h5 class="card-title mt-2">Data Pesanan</h5>
  </div>
  <div class="card-body">
  	<form action="" method="post">
  		<div class="row mb-2">
  			<div class="col-md-8">
					<div class="form-group">
						<input type="hidden" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<input type="text" name="keyword" class="form-control" autofocus autocomplete="off" placeholder="Masukkan keyword pencarian..">
					</div>
				</div>
				<div class="col-md-1">
					<div class="form-group">
						<button class="btn btn-primary" type="submit" name="cari">Cari</button>
					</div>
				</div>
			</div>
  	</form>
    <table class="table">
  <thead>
    <tr>
      <th class="col" scope="col">id Pesan</th>
      <th class="col" scope="col">Nama</th>
      <th class="col" scope="col">Check in</th>
      <th class="col" scope="col">Check out</th>
      <th class="col" scope="col">Tipe</th>
      <th class="col" scope="col">Jumlah</th>
      <th class="col" scope="col">Status</th>
      <th class="col" scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	while ($d = mysqli_fetch_array($data)) {
  		?>
  		<tr>
    		<td class="pt-2"><?php echo $d['idpesan']; ?></td>
	     	<td class="pt-2"><?php echo $d['nama']; ?></td>
		    <td class="pt-2"><?php echo $d['cekin']; ?></td>
		    <td class="pt-2"><?php echo $d['cekout']; ?></td>
		    <td class="pt-2"><?php echo $d['tipe']; ?></td>
		    <td class="pt-2"><?php echo $d['jumlah']; ?></td>
		    <td class="pt-2"><?php echo $d['status']; ?></td>
		    <td class="pt-2"><a href="validasi.php?id=<?= $d['idpesan']?>" class="btn btn-primary btn-sm">Check in</a> | <a href="cekot.php?id=<?= $d['idpesan']?>" class="btn btn-danger btn-sm">Check out</a></td>
	    </tr>

    <?php
  	}
  	?>
    
  </tbody>
</table>
  </div>
  <div class="card-footer text-muted">
    TRANSYLVANIA
  </div>
</div>
</div>

	<!-- akhir isi -->

	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>