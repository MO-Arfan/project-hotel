<?php 
// mengaktifkan session php
session_start();
 
// menghapus semua session
session_unset();
$_SESSION = [];
session_destroy();
 
// mengalihkan halaman ke halaman login
header("location:../logint.php");
exit;
   

?>

