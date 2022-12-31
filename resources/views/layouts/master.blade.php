<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} :: {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick-carousel/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick-carousel/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/loader.js') }}"></script>
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">



</head>

<body>
    {{-- loader --}}
    @include('layouts.partials.loader')

    <header class="oleez-header">

        {{-- navbar --}}
        @include('layouts.partials.navbar')
    </header>

    <main>
        @yield('container')
    </main>

    {{-- Footer --}}

    @include('layouts.partials.footer')


    <!-- Modals -->
    <!-- Off canvas social menu -->
    @include('layouts.partials.modals.canvas')
    <!-- Full screen search box -->
    @include('layouts.partials.modals.searchModals')

    {{-- script template --}}
    <script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wowjs/wow.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/slick-carousel/slick.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    {{-- script main --}}
    <script src="{{ asset('assets/js/landing.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        new WOW({
            mobile: false
        }).init();
    </script>
</body>


</html>
