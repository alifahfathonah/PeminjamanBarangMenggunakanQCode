<?php
  include'config.php';

    $IdBarang = $_POST['IdBarang']; 
    $BrgNama = $_POST['BrgNama']; 
    $BrgMerk = $_POST['BrgMerk']; 
    $BrgSpesifikasi = $_POST['BrgSpesifikasi'];
    $BrgKondisi = $_POST['BrgKondisi'];
    $BrgJumlah = $_POST['BrgJumlah'];

  if(isset($_POST['simpan'])) {
    extract($_POST);
    mysqli_query($conn,
      "UPDATE barang
      SET IdBarang='$IdBarang', BrgNama='$BrgNama', BrgMerk='$BrgMerk', BrgSpesifikasi='$BrgSpesifikasi', BrgKondisi='$BrgKondisi', BrgJumlah='$BrgJumlah'
      WHERE IdBarang = '$IdBarang'"
    );
    header("location: barang.php");
  }else {
    header("location: barang-edit.php");
  }
?>