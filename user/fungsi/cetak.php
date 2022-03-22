<?php
session_start();

require_once '../../vendor/autoload.php';

include '../../fungsi/koneksi.php';



$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../../img/sic.png" type="image/png"
	<title>Transaksi</title>
	>
</head>
<body>

	<h1>Hotel Transylvania</h1>
	<table border="1" cellpadding="10" cellspacing="0">
	<tr>
	<th>NO</th>
	<th>Nama</th>
	<th>tipe kamar</th>
	<th>check in</th>
	<th>check out</th>
	<th>Jumlah kamar</th>
	<th>lama</th>
	<th>harga kamar</th>
	<th>harga total</th>
	<th>Status</th>
	</tr>';

	$i=1;
	$id=$_POST['idpesan'];
	$data = mysqli_query($koneksi,"SELECT * FROM pemesanan INNER JOIN kamar on pemesanan.tipe = kamar.tipe WHERE pemesanan.idpesan = '$id'");
	$cek=mysqli_num_rows($data);
	if ($cek > 0){

	while ($d = mysqli_fetch_array($data)) {
	$tgl1 = new DateTime($d['cekin']);
	$tgl2 = new DateTime($d['cekout']);
	$jarak = $tgl2->diff($tgl1);					
	$ha = $jarak->d;					
	$jum = $ha * $d['harga'];										
	$html .= '<tr>
	<td>'. $i++ .'</td>
	<td>'. $d["nama"] .'</td>
	<td>'. $d["tipe"] .'</td>
	<td>'. $d["cekin"] .'</td>
	<td>'. $d["cekout"] .'</td>
	<td>'. $d["jumlah"] .' kamar</td>
	<td>'. $ha .' hari</td>
	<td>Rp.'. $d["harga"] .'</td>
	<td>Rp.'. $jum .'</td>
	<td>'. $d["status"] .'</td>
	</tr>';
}
}

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('Data-Transaksi.pdf', 'I');

?>
