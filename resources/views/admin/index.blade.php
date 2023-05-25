
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Wisata Surabaya</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('admin.inc.navbar')
        @include('admin.inc.sidebar')
      
    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col-6">
              
              <div class="small-box bg-info">
              <div class="inner">
              <h3>150</h3>
              <p>Jumlah Tempat Wisata</p>
              </div>
              <div class="icon">
              <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('data_wisata') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>
              
              <div class="col-lg-3 col-6">
              
              <div class="small-box bg-success">
              <div class="inner">
              <h3>313</h3>
              <p>Jumlah Review</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('data_review') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>
              
              <div class="col-lg-3 col-6">
              
              <div class="small-box bg-warning">
              <div class="inner">
              <h3>44</h3>
              <p>Kategori Lokasi</p>
              </div>
              <div class="icon">
              <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ route('data_location_category') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              </div>
              
              <div class="col-lg-3 col-6">
              
              <div class="small-box bg-danger">
              <div class="inner">
              <h3>65</h3>
              <p>Jumlah Pengguna</p>
              </div>
              <div class="icon">
              <i class="ion ion-pie-graph"></i>
              </div>
              
              </div>
              </div>
              
              </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
    
      <!-- Main Footer -->
      @include('admin.inc.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
