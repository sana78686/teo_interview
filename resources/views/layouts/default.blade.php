<!DOCTYPE html>
<!-- saved from url=(0055)https://templates.envytheme.com/zust/default/index.html -->
<html lang="zxx" class="theme-light">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ url('') }}/assets/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/animate.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/remixicon.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/flaticon.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/simplebar.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/metismenu.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/style.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/dark.css">
    <link rel="stylesheet" href="{{ url('') }}/assets/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css"> --}}
    

    <title>Teo International Task</title>

    <link rel="icon" type="image/png" href="https://templates.envytheme.com/zust/default/assets/images/favicon.png">
    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
        }
    </style>
</head>

<body cz-shortcut-listen="true">

    <!-- Start Preloader Area -->
    <div class="preloader-area" style="display: none;">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Main Content Wrapper Area -->
    <div class="main-content-wrapper d-flex flex-column">

        <!-- Start Navbar Area -->
        @include('partials.navbar')
        <!-- End Navbar Area -->


        <!-- Start Content Page Box Area -->
        @yield('content')
        <!-- End Content Page Box Area -->


    </div>
    <!-- End Main Content Wrapper Area -->


    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-line"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Links of JS files -->
    <script src="{{ url('') }}/assets/jquery.min.js.download"></script>
    <script src="{{ url('') }}/assets/bootstrap.bundle.min.js.download"></script>
    <script src="{{ url('') }}/assets/jquery.magnific-popup.min.js.download">
    </script>
    <script src="{{ url('') }}/assets/jquery-ui.min.js.download"></script>
    <script src="{{ url('') }}/assets/simplebar.min.js.download"></script>
    <script src="{{ url('') }}/assets/metismenu.min.js.download"></script>
    <script src="{{ url('') }}/assets/owl.carousel.min.js.download"></script>
    <script src="{{ url('') }}/assets/wow.min.js.download"></script>
    
    @yield('scripts')
</body>

</html>
