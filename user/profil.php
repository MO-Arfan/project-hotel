<?php
	session_start();
	include "../fungsi/koneksi.php";

	if(!isset($_SESSION['logint'])){
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
            window.location = "../logint.php";
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
	<link rel="stylesheet" type="text/css" href="../pendaf.css">
	<link rel="icon" href="img/sic.png" type="image/png">

	<title>Profil</title>
</head>
<body>


	



	<div style=" margin-bottom: 100px; width: 50%;" class="container">
		<h2 class="alert alert-warning text-center mt-5">PROFIL</h2>

		<div class="card">

		  	<div class="card-header text-center">
		    <h2 style="font-weight:bold; text-transform: uppercase;"><?php
		     $nama=$_SESSION['username'];
		     echo "$nama"
		     ?></h2>
		  	</div>

		  	<div class="card-body">
		  		<div style="margin-left:10px; " class="row mt-2 mx-auto">

		  			<?php
		  			$nama  = $_SESSION['username'];
				  	$data = mysqli_query($koneksi,"SELECT * FROM tamu WHERE username = '$nama'");
					
				  	$cek=mysqli_num_rows($data);

				  	if ($cek > 0){

				  	while ($d = mysqli_fetch_array($data)) {
				  		?>

				  		<div  class="card mb-2" style="width: 100%;">
						  <ul class="list-group list-group-flush">
						  	
						    <li class="list-group-item">Nama 	: <?php echo $d['nama']; ?> </li>
						    <li class="list-group-item">Username 	: <?php echo $d['username']; ?></li>
						    <li class="list-group-item" hidden>Password 	: <?php echo md5($d['password']); ?></li>
						    <li class="list-group-item">Email 	: <?php echo $d['email']; ?></li>
						    <li class="list-group-item">alamat 	: <?php echo $d['alamat']; ?></li>
						    <li class="list-group-item">No.Telepon 	: <?php echo $d['telepon']; ?></li>
						    <li class="list-group-item text-center"><form method="POST" action="fungsi/cetak.php" target="_blank">
						<input name="idpesan" value="<?= $d['idpesan'] ?>" hidden>
						<button class="btn btn-primary" type="submit" disabled>Ubah</button>
					</form></li>
						  </ul>
						  
						</div>

				    <?php
				 }
				  	}
				  	else {
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

		  <div class="card-footer text-center text-muted">
		    TRANSYLVANIA
		  </div>
		</div>

		<center><a class="kembali" href="javascript:history.back()"><button style="margin-top: 20px; " class="btn btn-primary col-md-6 ">KEMBALI</button></a></center>
	</div>


	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

</body>
</html>
