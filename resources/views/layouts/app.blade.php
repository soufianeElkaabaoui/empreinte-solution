<html>

<head>
    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href={{ asset('lib/animate/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }} rel="stylesheet">
    <link href={{ asset('lib/lightbox/css/lightbox.min.css') }} rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href={{ asset('stylesheet/bootstrap.min.css') }} rel="stylesheet">

    @yield('stylesheets')
    <!-- Template Stylesheet -->
    <link href={{ asset('stylesheet/style.css') }} rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <x-header />
    <div class="container">
        {{-- will be used to contain the page main content --}}
        @yield('content')
            <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary bg-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    </div>
    <x-footer />
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
    <script src={{ asset('lib/wow/wow.min.js') }}></script>
    <script src={{ asset('lib/easing/easing.min.js') }}></script>
    <script src={{ asset('lib/waypoints/waypoints.min.js') }}></script>
    <script src={{ asset('lib/counterup/counterup.min.js') }}></script>
    <script src={{ asset('lib/owlcarousel/owl.carousel.min.js') }}></script>
    <script src={{ asset('lib/lightbox/js/lightbox.min.js') }}></script>

    <!-- Template Javascript -->
    <script src={{asset("js/main.js")}}></script>
</body>

</html>
