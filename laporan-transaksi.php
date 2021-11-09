<?php
session_start();// menjalankan sesion PHP 
include'config.php';
?>

<!DOCTYPE html>
<html>
<head>

<?php include 'template/header.php';?>
<?php include 'template/sidebar.php';?>
 <!-- sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Laporan Data Transakasi</h1>
          </div><!-- /.col -->
          <div class="form-inline"> 
            <div align="right"> 
            <div class="form-inline"> 
            <div align="right"> 
                <form method=post> 
                    <input type="text" name="pencarian" placeholder="Search">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                </form> 
            </div> 
        </div>
            </div> 
        </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    
    <br>
    <!-- Main content -->
    <section class="content">

      <div class="row">
      <div class="mb-2">
                      <!-- <tr>
<form method="POST" action="">
<td><b>-Pilih Tanggal-</b></td><td><input type="date" name="hari_ini"></td>
<td>-</td>
<td><button type="submit" name="cari" class="btn btn-primary float-right">Cari</td> 
</tr> -->
        <a target="_blank" href="cetak_laporan.php"><img src="img/print.png" height="50px" height="50px"></a>&nbsp;
        <a target="_blank" href="ekspor_pdf_laporan.php"><img src="img/pd.png" height="50px" height="50px"></a>&nbsp;&nbsp;
        <a target="_blank" href="ekspor_excel_laporan.php"><img src="img/ex.png" height="50px" height="50px"></a>&nbsp;&nbsp;
    </div>
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>ID Transakasi</th>
                    <th>ID Barang</th>
                    <th>Nama Peminjam</th>
                    <th>Kelas</th>
                    <th>Nama Barang</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status </th>
                </tr>
                </thead>
                <tbody> 
            <?php 
                $nomor = 1; 
                $query = "SELECT transaksi.IdTransaksi, b.IdBarang, b.BrgNama, transaksi.Nama, siswa.SwKelas, transaksi.TglPinjam, 
                        transaksi.TglKembali, transaksi.status FROM transaksi 
                        INNER JOIN barang b ON transaksi.IdBarang = b.IdBarang 
                        INNER JOIN siswa ON transaksi.SwKelas = siswa.SwKelas
                        ORDER BY IdTransaksi";
             //$sql="SELECT * FROM tbtransaksi ORDER BY idtransaksi DESC"; 
               $q_tampil_transaksi = mysqli_query($conn, $query); 

               /* Pengecekan apakah terdapat data di database, jika ada, tampilkan*/ 
               if(mysqli_num_rows($q_tampil_transaksi) > 0) { 

                   /* looping data transaksi sesuai yang ada di database */
                   while($r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi)) {
           ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $r_tampil_transaksi['IdTransaksi']; ?></td> 
                <td><?php echo $r_tampil_transaksi['IdBarang']; ?></td>
				<td><?php echo $r_tampil_transaksi['Nama']; ?></td>
				<td><?php echo $r_tampil_transaksi['SwKelas']; ?></td>
                <td><?php echo $r_tampil_transaksi['BrgNama']; ?></td>
                <td><?php echo $r_tampil_transaksi['TglPinjam']; ?></td>
                <td><?php echo $r_tampil_transaksi['TglKembali']; ?></td>
                <td><?php echo $r_tampil_transaksi['status']; ?></td>
            </tr>
            <?php 
                        $nomor++; 
                    } // end looping 
                } // end if 
            ?> 
    </table> 
    <!-- <script> 
        window.print();
    </script>  -->
</div> 
