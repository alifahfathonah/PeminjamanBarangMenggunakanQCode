<?php
    include 'config.php'; // menyisipkan/memanggil file koneksi.php untuk koneksi data dengan basis data 

    $IdTransaksi = $_GET['IdTransaksi'];
    $BrgNama = $_GET['BrgNama'];
    $Nama = $_GET['Nama'];
    $tgl = date('Y-m-d'); 

    mysqli_query($db,"UPDATE transaksi SET status='Kembali', TglKembali='$tgl' WHERE IdTransaksi ='$IdTransaksi'"); 
    // mysqli_query($db,"UPDATE barang SET jmlbuku=(jmlbuku+1) where judul ='$judul'"); 
    mysqli_query($db,"UPDATE siswa SET status='Tidak Meminjam' where Nama ='$naNamama'"); 
 
?> 
<script type="text/javascript">
	alert("Proses Pengembalian Buku Berhasil");
    window.location.href = "transaksi-peminjaman.php";
</script>