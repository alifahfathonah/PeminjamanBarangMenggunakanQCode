<?php
    //membuat koneksi
    include 'config.php';

    //memasukkan data ke array
    $IdBarang = $_POST['IdBarang']; 
    $BrgNama = $_POST['BrgNama']; 
    $BrgMerk = $_POST['BrgMerk']; 
    $BrgSpesifikasi = $_POST['BrgSpesifikasi'];
    $BrgKondisi = $_POST['BrgKondisi'];
    $BrgJumlah = $_POST['BrgJumlah'];

    //melakukan input
    $sql = "INSERT INTO barang VALUES('$IdBarang','$BrgNama','$BrgMerk','$BrgSpesifikasi','$BrgKondisi','$BrgJumlah')"; 
    $query = mysqli_query($conn, $sql); 

    //kembali ke halaman sebelumnya
    header("location: barang.php");