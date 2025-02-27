<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>
    <x-styles />
</head>

<body>

    <!-- Preloader -->
    {{-- <div id="preloader">
        <div class="spinner-grow" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}

    @if (!isset($hideHeader))
        @include('frontend.layouts.header')
    @endif
    <main>
        @yield('content')
    </main>
    @if (!isset($hideFooter))
        @include('frontend.layouts.footer')
    @endif


    <x-scripts />




</body>
