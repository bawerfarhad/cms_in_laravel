<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="description" content="this is for learning purposes">
    <meta name="author" content="Bawer Farhad">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
{{--    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}

    <!-- Custom styles for this template -->
{{--    <link href="css/blog-home.css" rel="stylesheet">--}}



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Scripts -->
    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',
        'resources/css/blog_home/blog-home.css',
        'resources/vendor/jquery/jquery.js',
        'resources/vendor/bootstrap/js/bootstrap.bundle.js',

        'resources/vendor/fontawesome-free/css/all.css', // admin section
        'resources/css/admin/sb-admin-2.css',
        'resources/vendor/jquery/jquery.js',
        'resources/vendor/jquery-easing/jquery.easing.js',
    ])
</head>
<body>
    <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <x-navbar />   {{-- this name because the component in the home-component folder and 'home-navbar-component' is the actual component --}}
            </nav>


        @yield('content')
        </div>

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
{{--        <script src="vendor/jquery/jquery.min.js"></script>--}}
{{--        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
</body>
</html>
