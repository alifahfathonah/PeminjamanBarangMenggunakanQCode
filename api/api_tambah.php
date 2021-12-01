<?php
require_once('../config.php');

 
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

		
	$sql = mysqli_query($conn,"INSERT INTO transaksi (IdTransaksi, IdBarang, Nama, SwKelas, BrgNama, Spesifikasi, qty, TglPinjam, TglKembali, status) VALUES ($IdTransaksi, $IdBarang, $Nama, $SwKelas, $BrgNama, $Spesifikasi, $qty, $TglPinjam, $TglKembali, $status)");
	
	if ($sql) {
		echo json_encode(array('RESPONSE' => 'SUCCESS'));
		//header("location:../transaksi-peminjaman.php");
	} else {
		echo json_encode(array('RESPONSE' => 'FAILED'));
	}
 