<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tokonyadia | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/template2/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/template2/dist/css/adminlte.min.css')}}">

  @stack('style')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('dashboard.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('/template2/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    @include('dashboard.sidebar')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('judul')</h1>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- /.error-page -->

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">@yield('judul')</h3>
  
            <div class="card">
                <div class="card-header">
                    <h3 class="pull-right" style="text-align: right"><button class="btn btn-success">
                        <a href="/create" style="color: white"> Add Data </a>
                       </button>
                    </h3>
                </div>
            </div>
          <div class="card-body">
                    <div class="card-body">
                        <table class="table table-sm table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Jenis Produk</th>
                                    <th>Stock</th>
                                    <th>Harga</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                <?php
                                $no = 1;    
                                ?>
                                @foreach ($product as $pd)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $pd->nama_product }}</td>
                                    <td>{{ $pd->jenis_product }}</td>
                                    <td>{{ $pd->harga }}</td>
                                    <td>{{ $pd->stok }}</td>
                                    <td>
                                        <form action="product/delete/{{ $pd->id }}" method="POST">
                                            @csrf
                                          {{-- @method('delete') --}}
                                            <button type="button" class="btn btn-primary btn-xs"><i class="fa fas-pencil">
                                              <a href="/product/edit/{{ $pd->id }}" style="color: black">Update</a> </i></button>
                                            <button class="btn btn-danger btn-xs">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
          </div>
          <!-- /.card-body -->
         
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('/template2/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/template2/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/template2/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->

@stack('scripts')

@include('sweetalert::alert')
</body>
</html>
