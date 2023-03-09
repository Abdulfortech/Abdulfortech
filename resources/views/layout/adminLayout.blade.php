<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Abdullfortech |  Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/admin/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/admin/summernote/summernote-bs4.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/admin/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/datatables/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

</head>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('components.sideBar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            @include('components.topNav')
            <!-- contents -->
            {{-- view output --}}
            <!-- @yield('contents') -->
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        @include('components.footer')
        <!-- End of Footer -->

    </div>
        <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/admin/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/admin/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/admin/js/sb-admin-2.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('assets/admin/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function () {
        // Summernote
        $('.textarea').summernote()
    })
    </script>
    <!-- DataTables -->
    <script src="{{ asset('assets/admin/datatables/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/datatables/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/datatables/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
            });
        });
    </script>

</body>

</html>