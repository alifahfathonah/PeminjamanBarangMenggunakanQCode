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
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col -->
          <div class="col-md-12">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
              <h1 class="card-title" > Profile</h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="x_content">
                    <div class="col-md-12">
                   
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img  src="img/<?php echo $row['foto']; ?>"  alt="User profile picture" style="width:300px;height:300px;">
                        </div>
                      </div>
                      <!--  -->
                    </div>
                    <br></br>
                    <div class="col-md-12">
                      <div class="profile_title">
                      </div>
                      <div class="x_content">
                    </div>
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td>Nama</td>
                          <td><?php echo $row['nama']; ?></td>
                        </tr>
                        <tr>
                          <td>Jabatan</td>
                          <td><?php echo $row['jabatan']; ?></td>
                        </tr>
                        <tr>
                          <td>Username</td>
                          <td><?php echo $row['username']; ?></td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td><?php echo $row['email']; ?></td>
                        </tr>
                      </tbody>
                    </table>
                    

                  </div>
             
                  <a href="editprofile.php"><button type="button" class="btn btn-primary"><i class="fa fa-edit m-right-xs"></i> Edit Profil</button></a>
                      <br />
                    
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