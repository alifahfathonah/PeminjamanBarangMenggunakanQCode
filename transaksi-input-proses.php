<?php
    //membuat koneksi
    include 'config.php';

    //memasukkan data ke array
    $IdTransaksi = $_POST['IdTransaksi']; 
    $IdBarang = $_POST['IdBarang']; 
    $Nama = $_POST['Nama']; 
    $SwKelas = $_POST['SwKelas'];
    $BrgNama = $_POST['BrgNama']; 
    $TglPinjam = $_POST['TglPinjam']; 
    $TglKembali = $_POST['TglKembali'];
    $status = $_POST['status'];

    //melakukan input
    $sql = "INSERT INTO transaksi VALUES('$IdTransaksi','$IdBarang','$Nama',
            '$SwKelas','$BrgNama','$TglPinjam','$TglKembali','$status')"; 
    $query = mysqli_query($conn, $sql); 

    //kembali ke halaman sebelumnya
    header("location: transaksi-peminjaman.php");