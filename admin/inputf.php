<?php
	session_start();
	include "fungsi/koneksi.php";

	if(!isset($_SESSION['login'])){
		//unset($_SESSION['user']);
		//echo "<script>window.location.replace('../fungsi/load.php')</script>";
?>
		<html>
		<head>
		<title></title>
		</head>
		<body>
			<script>
        var yakin = confirm("Silahkan Login Terlebih Dahulu");

        if (yakin) {
            window.location = "login.php";
        } else {
           window.location = "javascript:history.back()";
        }
    </script>
		</body>
		</html>
<?php
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

	<title>Tambah Fasilitas</title>
</head>
<body>


	



	<div style=" margin-bottom: 100px; width: 50%;" class="container">
		<h2 class="alert alert-warning text-center mt-5">TAMBAH FASILITAS</h2>

		<div class="card">

		  	<div class="card-header text-center">
		    <h2 style="font-weight:bold; text-transform: uppercase;">#<?php
		     $nama=$_SESSION['username'];
		     echo "$nama"
		     ?></h2>
		  	</div>

		  	<div class="card-body">
		  		<div style="margin-left:10px; " class="row mt-2 mx-auto">
		<form method="post" action="fungsi/tmbf.php" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" name="id" value="">
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="nama">Nama fasilitas</label>
						<input type="text" name="nama" class="form-control" placeholder="nama fasilitas" id="nama" required="required" autocomplete="off">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="des">Deskrip</label>
						<input type="text" name="des" class="form-control" placeholder="keterangan" id="des" required="required" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="gambar">Gambar</label>
						<input type="file" name="gambar" class="form-control" id="gambar">
					</div>
				</div>
			</div><br>

			<button type="submit" class="btn btn-success" name="submit">TAMBAH</button>
			<button type="reset" class="btn btn-danger">RESET</button>

		</form>
		  			
                    <!-- <div style="margin:20px 20px 20px 55px;" class="col">
                        <div class="card" style="width: 18rem;">
						  <img src="img/room1.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">Superior Room</h5>
						    <p class="card-text">Superior Room menawarkan tempat tidur single ganda atau 1 tempat tidur Queen/King.</p>
						    <a href="kamar/superior.php" class="btn btn-primary">INFO</a>
						  </div>
						</div>
                    </div>
                
                    <div style="margin:20px;"  class="col">
                        <div class="card" style="width: 18rem;">
						  <img src="img/room2.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">Deluxe Room</h5>
						    <p class="card-text">Deluxe Room memiliki ruang kamar yang lebih luas dan menawarkan pemandangan indah.</p>
						    <a href="kamar/deluxe.php" class="btn btn-primary">INFO</a>
						  </div>
						</div>
                    </div>

                     <div style="margin:20px;"  class="col">
                        <div class="card" style="width: 18rem;">
						  <img src="img/room3.jpg" class="card-img-top" alt="...">
						  <div class="card-body">
						    <h5 class="card-title">Executive Room</h5>
						    <p class="card-text">Executive Suite dilengkapi dengan ruang tamu terpisah serta dapur kecil atau pantry.</p>
						    <a href="kamar/executive.php" class="btn btn-primary">INFO</a>
						  </div>
						</div>
                    </div> -->
                </div>
		  </div>

		 
		</div>

		<center><a class="kembali" href="javascript:history.back()"><button style="margin-top: 20px; " class="btn btn-primary col-md-6 ">KEMBALI</button></a></center>
	</div>


	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

</body>
</html>
