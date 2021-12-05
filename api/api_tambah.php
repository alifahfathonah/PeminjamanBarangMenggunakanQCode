<?php
require_once('../config.php');

 
		$json = json_decode($_POST);

		$IdTransaksi = $json->IdTransaksi'; 
		$IdBarang = $json->IdBarang'; 
		$Nama = $json->Nama'; 
		$SwKelas = $json->SwKelas';
		$BrgNama = $json->BrgNama';
		$Spesifikasi = $json->Spesifikasi';
		$qty = $json->qty'; 
		$TglPinjam = $json->TglPinjam'; 
		$TglKembali = $json->TglKembali';
		$status = $json->status';

		$sql = mysqli_query($conn, "INSERT INTO transaksi VALUES('$IdTransaksi','$IdBarang','$Nama',
            '$SwKelas','$BrgNama','$Spesifikasi','$qty','$TglPinjam','$TglKembali','$status')");
	
	
	if ($sql) {
		echo json_encode(array('RESPONSE' => 'SUCCESS'));
		//header("location:../transaksi-peminjaman.php");
	} else {
		echo json_encode(array('RESPONSE' => 'FAILED'));
	}
 