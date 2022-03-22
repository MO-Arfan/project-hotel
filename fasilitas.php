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
		<h2 class="alert alert-primary text-center mt-5">FASILITAS UMUM HOTEL</h2>

		<div style="border: 0;" class="card">

		  	<div class="card-header text-muted text-center">
		    TRANSYLVANIA
		  	</div>

		  	<div class="card-body">
		  		<div class="row mb-5">

		  			<?php
		  			include'fungsi/koneksi.php';

				  	$data = mysqli_query($koneksi,"SELECT * FROM fasilitas WHERE idfasilitas = 1");
				  	$d = mysqli_fetch_array($data);

				  	$data2 = mysqli_query($koneksi,"SELECT * FROM fasilitas WHERE idfasilitas = 2");
				  	$d2 = mysqli_fetch_array($data2);
				  	
				  	$data3 = mysqli_query($koneksi,"SELECT * FROM fasilitas WHERE idfasilitas = 3");
				  	$d3 = mysqli_fetch_array($data3);

				  		?>


                    <div style="margin-left: 100px; margin-right: 100px;" class="col">
                       <div  id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
						  <div class="carousel-indicators">
						    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
						    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
						  </div>

						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img  height="600px" src="img/<?php echo $d['gambar'];?>" class="d-block w-100" alt="...">
						      <div class="carousel-caption d-none d-md-block">
						        <h5 style="text-transform: capitalize;"><?php echo $d['namafas'];?></h5>
						      </div>
						    </div>
						    <div class="carousel-item">
						      <img  height="600px" src="img/<?php echo $d2['gambar'];?>" class="d-block w-100" alt="...">
						      <div class="carousel-caption d-none d-md-block">
						        <h5 style="text-transform: capitalize;"><?php echo $d2['namafas'];?></h5>
						      </div>
						    </div>
						    <div class="carousel-item">
						      <img  height="600px" src="img/<?php echo $d3['gambar'];?>" class="d-block w-100" alt="...">
						      <div class="carousel-caption d-none d-md-block">
						        <h5 style="text-transform: capitalize;"><?php echo $d3['namafas'];?></h5>
						      </div>
						    </div>
						  </div>

						  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="visually-hidden">Next</span>
						  </button>
						</div>
                    </div>
                    
                </div>

                <div class="row text-center">

                	<?php
		  			include'fungsi/koneksi.php';

				  	$data = mysqli_query($koneksi,"SELECT * FROM fasilitas");
				  	while ($d = mysqli_fetch_array($data)) {
				  		?>

                    <div style="margin:20px 20px 20px 55px;" class="col">
                        <div class="card" style="width: 18rem; height: 120px; border-top: 0; border-right: 0; border-left: 0;">
						  
						  <div class="card-body">
						    <h5 class="card-title"><?php echo $d['namafas']?></h5>
						    <p class="card-text"><?php echo $d['deskrip']?></p>
						  </div>
						</div>
                    </div>
                <?php
            	}
            	?>
                </div>

			</div>

		  <div class="card-footer text-muted text-center">
		    TRANSYLVANIA
		  </div>
		</div>

		<center><a class="kembali" href="javascript:history.back()"><button style="margin-top: 20px; " class="btn btn-primary col-md-6 ">KEMBALI</button></a></center>
	</div>


	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

</body>
</html>