<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Abdullahi Aminu, @ibn__aminu">
	<!-- <meta name="generator" content="Neutral"> -->
	<!-- title -->
	<title>Abdullahi Aminu | Web Developer, IT Consultant</title>
	<!-- Favicon -->
	<link rel="icon" href="{{ asset('assets/img/me.png') }}" type="image/png">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">
    <!-- Bootstrap core CSS -->
	<link href="{{ asset('assets/vendor/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="vendor/assets/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Custom styles for this template -->
	<link href="{{ asset('assets/css/heroes.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/assets/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    
  <!-- Navigation bar -->
  @include('components.navbar')
  <main>
  {{-- view output --}}
  @yield('contents')
  </main>

<!--Footer-->
    @include('components.footerPublic')
<!--/.Footer-->

<!-- scripts -->
<!-- jQuery -->
<script src="{{ asset('assets/vendor/assets/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('assets/vendor/js/bootstrap.bundle.min.js') }}"></script> 
<script src="{{ asset('assets/vendor/js/bootstrap.min.js') }}"></script>  
<!-- overlayScrollbars -->
<script src="{{ asset('assets/vendor/assets/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

      
  </body>
</html>