<?php
	session_start();
	include "../fungsi/koneksi.php";

	if(!isset($_SESSION['username'])){
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
           alert("ok");
        }
    </script>
		</body>
		</html>
<?php
}
?>