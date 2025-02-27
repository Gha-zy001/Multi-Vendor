<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Bigshop | Responsive E-commerce Template</title>

    <!-- Favicon  -->
    {{-- <link rel="icon" href="{{ asset('frontend/user-interface/img/core-img/favicon.ico') }}"> --}}


    <link rel="stylesheet" href="{{ asset('frontend/user-interface/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/user-interface/assets/css/classy-nav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/user-interface/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/user-interface/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/user-interface/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/user-interface/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/user-interface/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/user-interface/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/user-interface/assets/css/icofont.min.css') }}">



    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/user-interface/assets/css/style.css') }}">

</head>

<body>

    <!-- Preloader -->
    {{-- <div id="preloader">
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}

    <!-- Header Area -->

    @include('frontend.layouts.header')

    <!-- Header Area End -->
    <main>
        @yield('content')
    </main>
    <!-- Footer Area -->
    @include('frontend.layouts.footer')
    <!-- Footer Area -->


    <x-scripts />




</body>
