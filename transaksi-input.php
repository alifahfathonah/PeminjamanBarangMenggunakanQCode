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
            <h1 class="m-0 text-dark">Tambah Data Peminjaman</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- Main content -->
    <form action="transaksi-input-proses.php" method="POST">
                <div class="card-body">
                  <div class="row">
                  <div class="col-md-6">
                  <!-- Kolom Satu -->
                  <div class="form-group ">
                    <label>ID Transaksi</label>
                    <input type="text" name="IdTransaksi" required="required" 
                      value="<?php //membuat IdSiswa otomatis
                      $query = mysqli_query($conn, "SELECT max(IdTransaksi) as kodeTerbesar FROM transaksi");
                      $data = mysqli_fetch_array($query);
                      $kodeTransaksi = $data['kodeTerbesar'];

                      $urutan = (int) substr($kodeTransaksi, 3, 3);
                      $urutan++;

                      $huruf = "TR-";
                      $waktu = date('dmy');
                      $kodeTransaksi = $huruf . $waktu . sprintf("-%03s", $urutan);
                      echo $kodeTransaksi;
                      ?>" readonly class="form-control">

                  </div>
                  <div class="form-group ">
                    <label>ID Barang</label>
                    <select name="IdBarang" class="form-control">
					          <option value="" select="selected">Pilih ID Barang</option>
                      <?php
                        $query = "SELECT * FROM barang
                            
                            ORDER BY IdBarang";

                        //$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC"; 
                        $q_tampil_barang = mysqli_query($conn, $query); 

                        while($r_tampil_barang=mysqli_fetch_array($q_tampil_barang)) {
                          echo"<option value=$r_tampil_barang[IdBarang]>$r_tampil_barang[IdBarang] | $r_tampil_barang[BrgNama]</option>";
                        }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nama Peminjaman</label>
                    <input type="text" name="Nama" placeholder="Nama Peminjam" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Kelas</label>
                    <select name="SwKelas" class="form-control">
					          <option value="" select="selected">Pilih Kelas</option>
                      <?php
                        $query = "SELECT * FROM siswa
                            
                            ORDER BY IdSiswa";

                        //$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC"; 
                        $q_tampil_siswa = mysqli_query($conn, $query); 

                        while($r_tampil_siswa=mysqli_fetch_array($q_tampil_siswa)) {
                          echo"<option value='$r_tampil_siswa[SwKelas]'>$r_tampil_siswa[SwKelas] | $r_tampil_siswa[SwNoHp]</option>";
                        }
                      ?>
                    </select>
                  </div>
                  
                  <!-- Kolom Dua -->
                  </div>
                  <div class="col-md-6">
                  <div class="form-group ">
                    <label>Nama Barang</label>
                    <select name="BrgNama" class="form-control">
					          <option value="" select="selected">Pilih Nama Barang</option>
                        <?php
                          $query = "SELECT * FROM barang
                              
                              ORDER BY IdBarang";

                          //$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC"; 
                          $q_tampil_barang = mysqli_query($conn, $query); 

                          while($r_tampil_barang=mysqli_fetch_array($q_tampil_barang)) {
                            echo"<option value=$r_tampil_barang[BrgNama]>$r_tampil_barang[BrgNama]</option>";
                          }
                        ?>
				            </select>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Pinjam</label>
                    <input type="date" name="TglPinjam" value="<?php echo $tgl; ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="status" placeholder="Status" class="form-control">
                  </div>
                  <div class="col-12">
                    <a href="scan.php" class="btn btn-success">Scan</a>
                    <a href="transaksi-peminjaman.php" class="btn btn-danger float-right">Batal</a>
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