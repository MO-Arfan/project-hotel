<?php 
// mengaktifkan session php
session_start();
 
if(isset($_POST['logout'])){
	
        echo "<script>
        var yakin = confirm('Apakah kamu yakin akan logout?');

        if (yakin) {
			window.location.replace('out.php');
			exit;
        } else {
            window.location.replace('index.php');
			exit;
        }
    </script>";
   
}
?>

<!-- // menghapus semua session
session_unset();
$_SESSION = [];
session_destroy();
 
// mengalihkan halaman ke halaman login
header("location:../logint.php");
exit;
 -->