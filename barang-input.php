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
            <h1 class="m-0 text-dark">Tambah Data Barang</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <form action="barang-input-proses.php" method="POST">
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-6">
                  <!-- Kolom Satu -->
                  <div class="form-group ">
                    <label>ID Barang</label>
                    <input type="text" name="IdBarang" placeholder="ID Barang" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="BrgNama" placeholder="Nama Barang" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Merk Barang</label>
                    <input type="text" name="BrgMerk" placeholder="Merk Barang" class="form-control">
                  </div>
                  
                  <!-- Kolom Dua -->
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                    <label>Spesifikasi Barang</label>
                    <input type="text" name="BrgSpesifikasi" placeholder="Spesifikasi Barang" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Kondisi Barang</label>
                    <input type="text" name="BrgKondisi" placeholder="Kondisi Barang" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Jumlah Barang</label>
                    <input type="text" name="BrgJumlah" placeholder="Jumlah Barang" class="form-control">
                  </div>
                  <div class="col-12">
                    <a href="barang.php" class="btn btn-danger float-right">Batal</a>
                    <input type="submit" value="Simpan" class="btn btn-primary float-right">
                  </div>
                </div>
                </div>
                </div>
              </form>

    <!-- End Content -->
 <!-- fotter -->
 <?php include 'template/footer.php';?>
</body>
</html>