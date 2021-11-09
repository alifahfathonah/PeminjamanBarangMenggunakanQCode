<?php
include'./config.php';

$nama=$_POST['nama'];
$jabatan=$_POST['jabatan'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

If(isset($_POST['simpan'])){
	
		extract($_POST);
		$nama_file   = $_FILES['foto']['name'];
		if(!empty($nama_file)){
		// Baca lokasi file sementar dan nama file dari form (fupload)
		$lokasi_file = $_FILES['foto']['tmp_name'];
		$tipe_file = pathinfo($nama_file, PATHINFO_EXTENSION);
		$file_foto = $IdUser.".".$tipe_file;
		// Tentukan folder untuk menyimpan file
		$folder = "../img/$file_foto";
		@unlink ("$folder");
		// Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		}
		else
			$file_foto=$foto_awal;
	
	mysqli_query($db,
		"UPDATE users
		SET nama='$nama',jabatan='$jabatan',username='$username',email='$email', password='$password',foto='$file_foto'
		WHERE IdUser='$IdUser'"
	);
	header("location: ../profile.php");
}
?>
