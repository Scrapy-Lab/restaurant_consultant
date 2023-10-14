<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2PE427JXD0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2PE427JXD0');
</script>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q5DLKL5GHJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q5DLKL5GHJ');
</script>
    @include('meta::manager', [
        'title' => 'TRC | The Restaurant Consultant',
        'description' =>
            'We are passionate about the art and science of hospitality. Our mission is to partner with restaurants, cafes, bars, and culinary establishments to elevate their dining experiences, streamline operations, and maximize their potential for success.',
        'image' => asset('consulting/img/logo.png'),
        'keywords' =>

          'trc, the restaurant consultant, restaurant consultant, consultant, restaurant , restaurants, restaurants nearby ,food near me, food open near me, restaurants open near me, audit, financial , cafes , bar, cafe, bars, culinary, concept creation, design, layouts, marketing, strategy, hiring, training, kithen, food planing, beverage, complete launch plan, management, operations, financial audit, franchise, expansion, brand, building, fine dining, causal dining, clubs, club, cloud kitchens, quick service',
    ])

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Page Title -->
    <title>TRC | The Restaurant Consultants</title>
    <!-- Favicon -->
    <link rel="icon" href="consulting/img/logo.png">
    <!-- Bundle -->
    <link rel="stylesheet" href="{{ asset('vendor/css/bundle.min.css') }}">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="{{ asset('vendor/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/swiper.min.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/css/cubeportfolio.min.css') }}">
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" href="{{ asset('consulting/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('consulting/css/settings.css') }}">
    <!-- Slick CSS Files -->
    <link rel="stylesheet" href="{{ asset('vendor/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/css/slick-theme.css') }}">
    <!-- Select -->
    <link rel="stylesheet" href="{{ asset('vendor/css/select2.min.css') }}">
    <!-- Style Sheet -->
    <link rel="stylesheet" href="{{ asset('consulting/css/style.css') }}">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="{{ asset('consulting/css/custom.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <img src="{{ asset('consulting/img/logo_black.png') }}" alt="logo" title="Logo" class="logo-default">
        </div>
    </div>
    <!-- Loader ends -->





    @include('layouts.header')
    <!-- Preloader End -->

    @yield('content')

    @include('layouts.footer')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- JavaScript -->
    <script src="{{ asset('vendor/js/bundle.min.js') }}"></script>

    <!-- Plugin Js -->
    <script src="{{ asset('vendor/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('vendor/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendor/js/swiper.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.cubeportfolio.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('vendor/js/parallaxie.min.js') }}"></script>
    <script src="{{ asset('vendor/js/wow.min.js') }}"></script>
    {{-- <script src="vendor/js/select2.min.js"></script> --}}
    <!-- Slick JS File -->
    <script src="{{ asset('vendor/js/slick.min.js') }}"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('vendor/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
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
    <script src="{{ asset('vendor/js/contact_us.js') }}"></script>

    <!-- custom script -->
    <script src="{{ asset('consulting/js/script.js') }}"></script>
    @livewireScripts()
</body>

</html>
