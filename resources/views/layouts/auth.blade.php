<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Octopus | Login</title>
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
        <div class="auth-body">
            <div class="auth-container d-flex align-items-center justify-content-center">
                <div class="auth-content">
                    <div class="auth-wrapper card bg-white py-4 pt-md-5 px-spacing-md-10 pb-spacing-md-7_5 pt-spacing-12">
                        @yield('content')
                    </div>
                    @yield('authfooter')
                </div>
            </div>
        </div>

        <!-- Javascript -->
        <script src="{{asset('https://code.jquery.com/jquery-3.7.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </body>
</html>
