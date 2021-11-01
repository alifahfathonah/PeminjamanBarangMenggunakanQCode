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
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="img/admin.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $row['nama']; ?></h3>

                <p class="text-muted text-center"><?php echo $row['jabatan']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Username</b> <a class="float-right"> <?php echo $row['username']; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"> <?php echo $row['email']; ?></a>
                  </li>
                </ul>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              
              <div class="form-group ">
                <i class="fas fa-user"></i>
                <label>Username</label>
                <input type="text" placeholder="Username" name="Username" value="" class="form-control" required>
              </div>
              <div class="form-group ">
                <i class="fas fa-envelope"></i>
                <label>Email</label>
                <input type="text" placeholder="Email" name="Email" value="" class="form-control" required>
              </div>
              <div class="form-group ">
                <!-- <i class="fas fa-user"></i> -->
                <label>Nama</label>
                <input type="text" placeholder="Nama" name="nama" value="" class="form-control" required>
              </div>
              <div class="form-group ">
                <!-- <i class="fas fa-user"></i> -->
                <label>Jabatan</label>
                <input type="text" placeholder="Jabatan" name="Jabatan" value="" class="form-control" required>
              </div>
              <div class="form-group ">
                <i class="fas fa-lock"></i>
                <label>Password </label>
                 <input type="password" placeholder="Password" name="password" value=""  class="form-control"required>
              </div>
              <div class="form-group ">
                <i class="fas fa-lock"></i>
                <label>Confirm Password</label>
                 <input type="password" placeholder="Confirm Password" name="password" value=""  class="form-control"required>
              </div>
              <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                      <button type="button" class="btn btn-block bg-gradient-primary">Save</button>
                      <button type="button" class="btn btn-block bg-gradient-danger">Cancel</button>
                    
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
