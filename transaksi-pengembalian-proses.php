<?php
    include 'config.php'; // menyisipkan/memanggil file koneksi.php untuk koneksi data dengan basis data 

    $IdTransaksi = $_GET['IdTransaksi'];
    $IdBarang = $_GET['IdBarang'];
    $Nama = $_GET['Nama'];
    $SwKelas = $_GET['SwKelas'];
    $BrgNama = $_GET['BrgNama'];
    $TglPinjam = $_GET['TglPinjam'];
    $tgl = date('Y-m-d'); 

    mysqli_query($conn,"UPDATE transaksi SET status='Kembali', TglKembali='$tgl' WHERE IdTransaksi ='$IdTransaksi'");
 
    header("location: transaksi-pengembalian.php");
?> 
<!-- <script type="text/javascript">
	alert("Proses Pengembalian Buku Berhasil");
    window.location.href = "transaksi-peminjaman.php";
</script> -->