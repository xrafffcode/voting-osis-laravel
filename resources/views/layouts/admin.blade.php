<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voting Osis">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/datatables.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">

</head>



<body>
    <div id="app">
        <div id="main">

            @include('admin.partials.sidebar')
            @include('admin.partials.header')

            <div class="page-content">
                @yield('content')
            </div>

            @include('admin.partials.footer')
        </div>
    </div>


    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('dist/js/lightbox-plus-jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/datatables.js') }}"></script>



</body>

</html>
