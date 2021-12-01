<?php
require_once('../config.php');

if (isset($_POST['IdTransaksi']) && isset($_POST['IdBarang']) && isset($_POST['Nama']) && isset($_POST['SwKelas']) && isset($_POST['BrgNama'])
    && isset($_POST['Spesifikasi']) && isset($_POST['qty']) && isset($_POST['TglPinjam']) && isset($_POST['TglKembali']) && isset($_POST['status'])) {
		$IdTransaksi = $_POST['IdTransaksi']; 
		$IdBarang = $_POST['IdBarang']; 
		$Nama = $_POST['Nama']; 
		$SwKelas = $_POST['SwKelas'];
		$BrgNama = $_POST['BrgNama'];
		$Spesifikasi = $_POST['Spesifikasi'];
		$qty = $_POST['qty']; 
		$TglPinjam = $_POST['TglPinjam']; 
		$TglKembali = $_POST['TglKembali'];
		$status = $_POST['status'];

	$sql = $conn->prepare("INSERT INTO transaksi (IdTransaksi, IdBarang, Nama, SwKelas, BrgNama, Spesifikasi, qty, TglPinjam, TglKembali, status) VALUES (?, ?, ?, ?)");
	$sql->bind_param('ssdd', $IdTransaksi, $IdBarang, $Nama ,
	$SwKelas , $BrgNama , $Spesifikasi , $qty , $TglPinjam , $TglKembali , $status );
	$sql->execute();
	if ($sql) {
		echo json_encode(array('RESPONSE' => 'SUCCESS'));
		//header("location:../transaksi-peminjaman.php");
	} else {
		echo json_encode(array('RESPONSE' => 'FAILED'));
	}
} else {
	echo "GAGAL";
}