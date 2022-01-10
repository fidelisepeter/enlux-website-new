<!DOCTYPE html>
    <html>
    <head> 
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/> 
        <title>Enlux Technology</title>         
        <meta content="" name="description"/> 
        <meta content="" name="keywords"/> 
        <!-- Favicons -->         
        <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon"/> 
        <!-- Google Fonts -->         
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"/> 
        <!-- Vendor CSS Files -->         
        <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet"/> 
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/> 
        <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet"/> 
        <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet"/> 
        <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet"/> 
        <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet"/> 
        <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"/> 
        <!-- Template Main CSS File -->         
        <link href="{{ asset('css/style.css') }}" rel="stylesheet"/> 
        
    </head> 
   <body>
        <div id="app">
            <app></app>
            <div id="preloader"></div>         <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> 
        </div>
        <!-- Vendor JS Files -->         
        <script src="{{ asset('vendor/aos/aos.js') }}"></script>         
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>         
        <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>         
        <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>         
        <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>         
        <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>         
        <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>         
        <!-- Template Main JS File -->         
       
        <script src="{{ url( mix('js/app.js') ) }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        
    </body>
    </html>