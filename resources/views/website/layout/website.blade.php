<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Pedro Miranda</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="/theme/assets/img/favicon.ico" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="/theme/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/theme/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/theme/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/theme/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/theme/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/theme/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/theme/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="/theme/assets/css/style.css?v={rand()}" rel="stylesheet">

    @yield('styles')

</head>

<body>
    
    <x-menu />
    
    @yield('header')

    <main id="main">

        @yield('content')

    </main><!-- End #main -->

    <x-footer :services="$services" :contact="$contact" />

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/theme/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="/theme/assets/vendor/aos/aos.js"></script>
    <script src="/theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/theme/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/theme/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/theme/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://malsup.github.io/jquery.form.js"></script> 

    <!-- Template Main JS File -->
    <script src="/theme/assets/js/main.js?v={{ rand() }}"></script>
    @yield('scripts')
</body>

</html>