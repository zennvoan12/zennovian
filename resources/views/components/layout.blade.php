@props(['bodyClass'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets') }}/img/favicon.png">
    <title>
        {{ config('app.name') }} ::
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets') }}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets') }}/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
    {{-- trix --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('assets/js/trix.js') }}"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
</head>

<body class="{{ $bodyClass }}">

    {{ $slot }}
    {{-- sweetalert lib --}}
    <link rel="stylesheet" href="{{ asset('assets/@sweetalert2/theme-material-ui/material-ui.css') }}">
    <script src="{{ asset('assets/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


    <script src="{{ asset('assets') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/smooth-scrollbar.min.js"></script>

    @stack('js')
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }



        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            html: 'It Will Closed',
            timer: 10000,

        })

        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type') }}";
            switch (type) {
                case 'info':
                    Toast.fire({
                        type: 'info',
                        title: "{{ Session::get('message') }}"
                    })
                    break;

                case 'success':
                    Toast.fire({
                        type: 'success',
                        title: "{{ Session::get('message') }}"
                    })
                    break;

                case 'warning':
                    Toast.fire({
                        type: 'warning',
                        title: "{{ Session::get('message') }}"
                    })
                    break;

                case 'error':
                    Toast.fire({
                        type: 'error',
                        title: "{{ Session::get('message') }}"
                    })
                    break;

                case 'dialog_error':
                    Toast.fire({
                        type: 'warning',
                        title: "Something Wrong !!",
                        text: "{{ Session::get('message') }}",
                        timer: 10000,
                    })
                    break;



            }
        @endif

        @if ($errors->any())
            Swal.fire({
                icon: 'error',
                title: "Oppst Something Wrong",
                text: "Try Check Again !"
            })
        @endif



        let baseurl = "<?= url('/') ?>";
        let fullURL = "<?= url()->full() ?>";
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets') }}/js/material-dashboard.min.js?v=3.0.0"></script>


</body>

</html>
