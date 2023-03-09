<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Abdulfortech |  Log In</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/admin/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container p-2">
        <!--Row  containing form-->
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="p-3">
                            <div class="text-center p-0">
                                <img src="img/me.png" width="150" height="150" class="rounded-circle mt-4 ">
                                <h2 class="text-primary mt-4 font-weight-bold">MyDashboard</h2>
                            </div>
                            <form class="user mt-5" action="{{ route('adminLogin') }}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                </div>
                                <button class="btn btn-primary btn-user btn-block"> Login </button>
                            </form>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/admin/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/admin/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>