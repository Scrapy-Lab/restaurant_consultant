<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and HTML5 template with 14 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords"
        content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, faq">
    <!-- Page Title -->
    <title>TRC | The Restaurant Consultants</title>
    <!-- Favicon -->
    <link rel="icon" href="consulting/img/logo.png">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{asset('vendor/css/bundle.min.css')}}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{asset('vendor/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/swiper.min.css')}}">

    <link rel="stylesheet" href="{{asset('vendor/css/cubeportfolio.min.css')}}">
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" href="{{asset('consulting/css/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('consulting/css/settings.css')}}">
    <!-- Slick CSS Files -->
    <link rel="stylesheet" href="{{asset('vendor/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css/slick-theme.css')}}">
    <!-- Select -->
    <link rel="stylesheet" href="{{asset('vendor/css/select2.min.css')}}">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{asset('consulting/css/style.css')}}">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="{{asset('consulting/css/custom.css')}}">
    @livewireStyles()
</head>

<body data-spy="scroll" data-target=".navbar-nav" data-offset="90">

    <!-- Loader -->
    <div class="loader" id="loader-fade">
        <div class="loader-container">
            {{-- <ul class="loader-box">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul> --}}
            <img src="{{asset('consulting/img/logo_black.png')}}" alt="logo" title="Logo" class="logo-default">
        </div>
    </div>
    <!-- Loader ends -->





    @include('layouts.header')
    <!-- Preloader End -->

    @yield('content')

    @include('layouts.footer')




    <!-- JavaScript -->
    <script src="{{asset('vendor/js/bundle.min.js')}}"></script>

    <!-- Plugin Js -->
    <script src="{{asset('vendor/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('vendor/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendor/js/swiper.min.js')}}"></script>
    <script src="{{asset('vendor/js/jquery.cubeportfolio.min.js')}}"></script>
    <script src="{{asset('vendor/js/jquery.appear.js')}}"></script>
    <script src="{{asset('vendor/js/parallaxie.min.js')}}"></script>
    <script src="{{asset('vendor/js/wow.min.js')}}"></script>
    {{-- <script src="vendor/js/select2.min.js"></script> --}}
    <!-- Slick JS File -->
    <script src="{{asset('vendor/js/slick.min.js')}}"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{asset('vendor/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('vendor/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    {{-- <script src="vendor/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendor/js/extensions/revolution.extension.video.min.js"></script> --}}

    <!-- Google Map Api -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgIfLQi8KTxTJahilcem6qHusV-V6XXjw"></script>
    <script src="consulting/js/maps.min.js"></script> --}}

    <!--contact form-->
    <script src="{{asset('vendor/js/contact_us.js')}}"></script>

    <!-- custom script -->
    <script src="{{asset('consulting/js/script.js')}}"></script>
    @livewireScripts()
</body>

</html>
