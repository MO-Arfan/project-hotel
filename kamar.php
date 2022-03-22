<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="pendaf.css">
	<link rel="icon" href="img/sic.png" type="image/png">

	<title>Transylvania Hotel</title>
</head>
<body>


	



	<div style=" margin-bottom: 100px;" class="container">
		<h2 class="alert alert-warning text-center mt-5">KAMAR HOTEL</h2>

		<div style="border: 0;" class="card">

		  	<div class="card-header text-center text-muted">
		   
		  	</div>

		  	<div class="card-body">
		  		<div class="row">

		  			<?php
		  			include'fungsi/koneksi.php';

				  	$data = mysqli_query($koneksi,"SELECT * FROM kamar");
				  	while ($d = mysqli_fetch_array($data)) {
				  		?>

				  	<div style="margin:20px 20px 20px 55px;" class="col">
                        <div class="card" style="width: 18rem;height: 480px; border-right: 0;">
						  <img src="img/<?php echo $d['gambar']; ?>" class="card-img-top" alt="...">
						  <div class="card-body ">
						    <h5 class="card-title"><?php echo $d['tipe']; ?></h5>
						    <p class="card-text">Rp.<?php echo $d['harga'] ?>,00</p>
						    <h5 style="font-weight:500;">Fasilitas :</h5>
						    <p class="card-text"><?php echo $d['fasilitas']; ?></p>
						    
						  </div>
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