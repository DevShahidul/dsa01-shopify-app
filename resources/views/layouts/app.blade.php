<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>

        <!-- Favicon icon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('favicon/site.webmanifest')}}">

        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- custom css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>

    <body>
        <div class="d-flex w-100">
            <x-sidebar></x-sidebar>
            <main class="main d-flex flex-column">
                <div class="content-container">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>

        <script src="{{asset('https://code.jquery.com/jquery-3.7.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
