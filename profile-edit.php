<?php
	session_start();
    include'config.php';
    $username       = $_SESSION['username'];
	$nama	 		= mysqli_real_escape_string($conn,$_POST['nama']);
    $jabatan		= mysqli_real_escape_string($conn,$_POST['jabatan']);
    $username		= mysqli_real_escape_string($conn,$_POST['username']);
    $email   	    = mysqli_real_escape_string($conn,$_POST['email']);
    $password   	= mysqli_real_escape_string($conn,sha1($_POST['password']));
	$foto			= $_FILES['foto']['name'];
	
	$sql  		= "SELECT * FROM users WHERE username='$username'";                        
	$query  	= mysqli_query($conn, $sql);
	$data 		= mysqli_fetch_array($query);
	
	if ($foto == ''){
		$ext			= substr($data['foto'], strripos($data['foto'], '.'));	
		$nama_b  		= $username . $ext;
		rename("img/".$data['foto'], "img/".$nama_b);
		$sql = "UPDATE users set 
						nama 			    = '$nama',
						jabatan		        = '$jabatan',
                        username		    = '$username',
                        email		        = '$email',
						password			= '$password',
						foto				= '$nama_b' 
				where username=$username";
				
		$execute = mysqli_query($conn, $sql);			
		
		$_SESSION['nama'] = $nama;
		$_SESSION['username']= $username;
						
		echo "<Center><h2><br>Data anda telah terubah</h2></center>
		<meta http-equiv='refresh' content='2;url= profile.php'>";
	}	
	else{
		
		$tipe_file 		= $_FILES['foto']['type'];
		$ukuran_file 	= $_FILES['foto']['size'];
		if (($tipe_file == "img/jpeg" || $tipe_file == "img/jpg" || $tipe_file == "img/png") and ($ukuran_file <= 2100000)){	
			unlink("img/".$data['foto']);
			$ext_file		= substr($foto, strripos($foto, '.'));			
			$tmp_file 		= $_FILES['foto']['tmp_name'];
			
			$nama_baru = $username . $ext_file;
			$path = "img/".$nama_baru;
			move_uploaded_file($tmp_file, $path);
			
			$sql = "UPDATE users set 
						nama 			    = '$nama',
						jabatan		        = '$jabatan',
                        username		    = '$username',
                        email		        = '$email',
						password			= '$password',
						foto				= '$nama_baru' 
				where username=$username";
				
		    $execute = mysqli_query($conn, $sql);		
		
			$_SESSION['username']= $username;
						
			echo "<Center><h2><br>Data anda telah terubah</h2></center>
				<meta http-equiv='refresh' content='2;url=profile.php'>";			
		}
		else{
			echo "<Center><h2><br>Gambar yang anda masukkan tidak sesuai ketentuan<br>Silahkan Ulangi</h2></center>
				<meta http-equiv='refresh' content='2;url=editprofile.php'>";
		}
	
	}
	?>
	