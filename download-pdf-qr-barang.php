<?php
session_start();// menjalankan sesion PHP 
include'config.php';

$IdBarang=$_GET['IdBarang'];
$q_tampil_barang=mysqli_query($conn,"SELECT * FROM barang WHERE IdBarang='$IdBarang'");
$r_tampil_barang=mysqli_fetch_array($q_tampil_barang);
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
            <!-- <h1 class="m-0 text-dark">Laporan Data Transakasi</h1> -->
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
    <!-- <h1>Laporan Data Transakasi</h1> -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Merk</th>
                    <th>Spesifikasi</th>
                    <th>Kondisi</th>
                    <th>Jumlah Barang</th>
                    <th>QRCode</th>
                </tr>
                </thead>
                <tbody> 
            <?php
            $nomor = 1; 
            $query = "SELECT * FROM barang";
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $r_tampil_barang['IdBarang']; ?></td>
                <td><?php echo $r_tampil_barang['BrgNama']; ?></td>
                <td><?php echo $r_tampil_barang['BrgMerk']; ?></td>
                <td><?php echo $r_tampil_barang['BrgSpesifikasi']; ?></td>
                <td><?php echo $r_tampil_barang['BrgKondisi']; ?></td>
                <td><?php echo $r_tampil_barang['BrgJumlah']; ?></td>
            </tr>
    </table> 
    <script> 
        window.print();
    </script> 
</div> 
