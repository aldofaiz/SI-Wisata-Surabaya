
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
            <h1 class="m-0">Buat Wisata</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Buat Wisata</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
            <h3>Create Data Wisata</h3>
        </div>

        <div class="card-body">
        <form action="/api/locations/" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            {{-- <input type="text" id="category_id" name="category_id" class="form-control" placeholder="Kategori Lokasi"> --}}
            <select class="form-control" id="category_id" name="category_id">
              @foreach ($location_categories as $location_category)
                <option  value="{{ $location_category->id }}">{{ $location_category->name_category }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="text" id="location_name" name="location_name" class="form-control" placeholder="Nama Wisata">
          </div>
          <div class="form-group">
            <textarea id="address" name="address" class="form-control" placeholder="Lokasi"></textarea>
          </div>
          <div class="form-group">
            <textarea id="description" name="description" class="form-control" placeholder="Deskripsi"></textarea>
          </div>
          <div class="form-group">
            <input type="text" id="banner" name="banner" class="form-control" placeholder="Banner">
          </div>          
          <div class="form-group">
            <input type="text" id="image" name="image" class="form-control" placeholder="Gambar">
          </div>
          <div class="form-group">
            <input type="text" id="image2" name="image2" class="form-control" placeholder="Gambar">
          </div>
          <div class="form-group">
            <input type="text" id="image3" name="image3" class="form-control" placeholder="Gambar">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
          </div>
        </form>
        </div>
      </div>
    </div>
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
