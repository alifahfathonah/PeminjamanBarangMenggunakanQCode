<?php 
    session_start();
    include'config.php';
    // $IdUser = $_GET['IdUser']; 
    // $q_tampil_user = mysqli_query($conn,"SELECT * FROM users WHERE IdUser = '$IdUser'"); 
    // $r_tampil_user = mysqli_fetch_array($q_tampil_user); 

?> 

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> User Profile</title>
  <!-- Tell the browser to be responsive to screen width -->

</head>
<body class="hold-transition sidebar-mini">
<?php
							$username = $_SESSION['username']; // mengambil username dari session yang login
							
							$sql = $conn->query("SELECT * FROM users WHERE username='$username'"); // query memilih entri username pada database
							if(mysqli_num_rows($sql) == 0){
							}else{
								$row = mysqli_fetch_assoc($sql);
							}
?>
<div class="wrapper">
 <?php include 'template/header.php';?>
<?php include 'template/sidebar.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col -->
          <div class="col-md-12">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			  <form action="profile-edit.php" method="post" enctype="multipart/form-data" name="updateadmin" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                    <input value="<?php echo $row['nama']; ?>" type="text" id="nama" name="nama" required="required" maxlength="70"  placeholder="Masukkan Nama Lengkap" class="form-control col-md-7 col-xs-12">
                </div>
				<div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jabatan <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input value="<?php echo $row['jabatan']; ?>" type="text" id="jabatan" name="jabatan" required="required" maxlength="50" placeholder="Masukkan Username Admin" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input value="<?php echo $row['username']; ?>" type="text" id="username" name="username" required="required" maxlength="50" placeholder="Masukkan Username Admin" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email<span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <input value="<?php echo $row['email']; ?>" type="text" id="email" name="email" required="required" maxlength="50" placeholder="Masukkan Username Admin" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
				<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="password" id="password" name="password" required="required" maxlength="50" placeholder="Masukkan Password" class="form-control col-md-7 col-xs-12">
                        </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto <span class="required">*</span>
                    </label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                         <input name="foto" accept="img/png,img/jpeg,img/jpg" type="file" id="foto" class="form-control" autocomplete="off"/> 
                    </div>
                </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto Sebelumnya <span class="required">*</span>
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <img src="img/<?php echo $row['foto']; ?>" class="img-circle" height="80" width="80" style="border: 2px solid #666666;" /> 
                        </div>
                </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="profile.php" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Batal</a>
                          <button type="submit" name="input" value="Simpan" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Simpan</button>
                        </div>
                      </div>

                    </form>
                    
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.4
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer> -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>