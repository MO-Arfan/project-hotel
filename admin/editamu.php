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

	<title>Ubah Data</title>
</head>
<body>


	



	<div style=" margin-bottom: 100px; width: 50%;" class="container">
		<h2 class="alert alert-warning text-center mt-5">EDIT DATA</h2>

		<div class="card">

		  	<div class="card-header text-center">
		    <h2 style="font-weight:bold; text-transform: uppercase;">#<?php
		     $nama=$_SESSION['username'];
		     echo "$nama"
		     ?></h2>
		  	</div>

		  	<div class="card-body">
		  		<div style="margin-left:10px; " class="row mt-2 mx-auto">

		  			<?php
		  			
		  			$id=$_GET['id'];
				  	$data = mysqli_query($koneksi,"SELECT * FROM tamu  WHERE idtamu = '$id'");


					

				  	$cek=mysqli_num_rows($data);

				  	if ($cek > 0){
				  		$d = mysqli_fetch_array($data);
				  		?>


		<form method="post" action="fungsi/editt.php">
			<div class="form-group">
				<label for="namalengkap">Nama lengkap</label>
				<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama lengkap" id="namalengkap" required="required" value="<?php echo $d['nama']; ?>">
				<input type="hidden" name="id" value="<?php echo $d['idtamu']; ?>">
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="Username">Username</label>
						<input type="text" name="username" class="form-control" placeholder="Username" id="Username" required="required" value="<?php echo $d['username']; ?>" disabled>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<input class="form-control" name="alamat" id="alamat" required="required" value="<?php echo $d['alamat']; ?>"></input>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="text" name="email" class="form-control col-md-6" placeholder="Email" id="email" required="required" value="<?php echo $d['email']; ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="notelp">Nomor Telp</label>
						<input type="text" name="no_telp" class="form-control col-md-6" placeholder="Nomor Telpon" id="notelp" required="required" value="<?php echo $d['telepon']; ?>">
					</div>
				</div>
			</div><br>

			<button type="submit" class="btn btn-success" name="submit">UBAH</button>
			<button type="reset" class="btn btn-danger">RESET</button>

		</form>

				    <?php
				 }else{
				  		?>

				  		<div class="card text-center" style="width: 100%;">
						  <div class="card-body">
						    <h5 class="card-title">Data tidak ditemukan</h5>
						    <p class="card-text">Pastikan anda memesan kamar terlebih dahulu</p>
						  </div>
						</div>

				  		<?php
				  	}
				  	?>
		  			
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
