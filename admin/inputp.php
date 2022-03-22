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

	<title>Tambah Petugas</title>
</head>
<body>


	



	<div style=" margin-bottom: 100px; width: 50%;" class="container">
		<h2 class="alert alert-warning text-center mt-5">TAMBAH PETUGAS</h2>

		<div class="card">

		  	<div class="card-header text-center">
		    <h2 style="font-weight:bold; text-transform: uppercase;">#<?php
		     $nama=$_SESSION['username'];
		     echo "$nama"
		     ?></h2>
		  	</div>

		  	<div class="card-body">
		  		<div style="margin-left:10px; " class="row mt-2 mx-auto">
		<form method="post" action="fungsi/tmbp.php">
			<div class="form-group">
				<input type="hidden" name="id" value="">
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="Username">Username</label>
						<input type="text" name="username" class="form-control" placeholder="Username" id="Username" required="required" value="" autocomplete="off">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Password" id="password" required="required" value="" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="alamat">Level</label>
						<select class="form-select" name="level" id="selek" required="required" aria-label="Default select example">
                              <option selected="selected" value="petugas">petugas</option>
                              <option value="admin">Admin</option>
                              <option value="petugas">Petugas</option>
                            </select>
					</div>
				</div>
			</div><br>

			<button type="submit" class="btn btn-success" name="submit">TAMBAH</button>
			<button type="reset" class="btn btn-danger">RESET</button>

		</form>
		  			
                   
                </div>
		  </div>

		 
		</div>

		<center><a class="kembali" href="javascript:history.back()"><button style="margin-top: 20px; " class="btn btn-primary col-md-6 ">KEMBALI</button></a></center>
	</div>


	<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>

</body>
</html>
