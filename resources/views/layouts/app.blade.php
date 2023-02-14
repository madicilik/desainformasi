<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{ asset('vendors/adminlte-3.1.0/plugins/fontawesome-free/css/all.min.css') }}">
          <link rel="stylesheet" href="{{ asset('vendors/adminlte-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('vendors/adminlte-3.1.0/dist/css/adminlte.min.css') }}">
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
        @auth
            @include('layouts.dashboard.navbar')

            @include('layouts.dashboard.sidebar')
        @endauth

        @yield('content')

        @auth
            @include('layouts.dashboard.footer')
        @endauth
        </div>
        <!-- jQuery -->
       
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <!-- AdminLTE App -->
      
        <script src="{{ asset('vendors/adminlte-3.1.0/dist/js/adminlte.min.js') }}"></script>
         <script src="{{ asset('vendors/adminlte-3.1.0/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('vendors/adminlte-3.1.0/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
  });
</script>
    </body>
</html>
