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

	<title>Ubah Kamar Hotel</title>
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
				  	$data = mysqli_query($koneksi,"SELECT * FROM kamar  WHERE id_kamar = '$id'");

				  	$cek=mysqli_num_rows($data);

				  	if ($cek > 0){
				  		$d = mysqli_fetch_array($data);
				  		?>


		<form method="post" action="fungsi/editk.php" enctype="multipart/form-data">
			<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $d['id_kamar']; ?>">
				<input type="hidden" name="old" value="<?php echo $d['gambar']; ?>">
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="tipe">Tipe kamar</label>
						<input type="text" name="tipe" class="form-control" placeholder="tipe kamar" id="tipe" required="required" value="<?php echo $d['tipe']; ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="harga">Harga</label>
						<input type="text" name="harga" class="form-control" placeholder="harga kamar" id="harga" required="required" value="<?php echo $d['harga']; ?>">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="stok">Stok</label>
						<input type="text" name="stok" class="form-control" placeholder="stok" id="stok" required="required" value="<?php echo $d['stok']; ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="fas">Fasilitas</label>
						<input type="text" name="fas" class="form-control" placeholder="fasilitas
						" id="fas" required="required" value="<?php echo $d['fasilitas']; ?>">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="gambar">Gambar</label>
						<img src="../img/<?php echo $d['gambar']; ?>" width="300"> 
						<input type="file" name="gambar" class="form-control mt-2" id="gambar">
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
		  			
                </div>
		  </div>

		 
		</div>

		<center><a class="kembali" href="javascript:history.back()"><button style="margin-top: 20px; " class="btn btn-primary col-md-6 ">KEMBALI</button></a></center>
	</div>


	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

</body>
</html>
