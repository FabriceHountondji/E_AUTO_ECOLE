
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-autoCar - {{ isset($title) ? $title :' ' }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=" {{ asset('storage/assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <link rel="stylesheet" href=" {{ asset('storage/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}"> -->
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href=" {{ asset('storage/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}"> -->
  <!-- JQVMap -->
  <!-- <link rel="stylesheet" href=" {{ asset('storage/assets/plugins/jqvmap/jqvmap.min.css') }}"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href=" {{ asset('storage/assets/css/adminlte.min.css') }}"> -->
  <!-- overlayScrollbars -->
  <!-- <link rel="stylesheet" href="{{ asset('storage/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href=" {{ asset('storage/assets/plugins/daterangepicker/daterangepicker.css') }}"> -->
  <!-- summernote -->
  <!-- <link rel="stylesheet" href=" {{ asset('storage/assets/plugins/summernote/summernote-bs4.min.css') }}"> -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script> -->

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css"> -->

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="{{ asset('storage/assets/plugins/fontawesome-free/css/all.min.css') }}"> -->
  <!-- DataTables -->
  <!-- <link rel="stylesheet" href="{{ asset('storage/assets/plugins/fullcalendar/main.css') }}"> -->
  <link rel="stylesheet" href="{{ asset('storage/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('storage/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('storage/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('storage/assets/dist/css/adminlte.min.css') }}">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src=" {{ asset('storage/assets/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
        </div> -->
        <!-- Navbar -->
                @include('layouts/partials.header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">


            @include('layouts/partials.menu')

            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">{{ isset($title) ? $title :'Dashboard' }}</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">{{ isset($title) ? $title :'Dashboard' }}</a></li>
                                <li class="breadcrumb-item active">Tableau de bord</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>

            </section>
        </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=" {{ asset('storage/assets/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap 4 -->
<script src=" {{ asset('storage/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('storage/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('storage/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script src="{{ asset('storage/assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('storage/assets/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('storage/assets/dist/js/demo.js') }}"></script>
<!-- jQuery -->

<!-- <script src="{{ asset('storage/plugins/jquery-ui/jquery-ui.min.js') }}"></script> -->
<!-- fullCalendar 2.2.5 -->
<!-- <script src="{{ asset('storage/assets/plugins/moment/moment.min.js') }}"></script> -->
<!-- <script src="{{ asset('storage/assets/plugins/fullcalendar/main.js') }}"></script> -->
<!-- AdminLTE for demo purposes -->

<script>
    $(function () {
        //
        bsCustomFileInput.init();

        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });

        //
    });
</script>

</body>
</html>
