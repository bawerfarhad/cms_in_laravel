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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite([
        'resources/sass/app.scss',
        'resources/js/app.js',
        'resources/css/blog_home/blog-home.css',
        'resources/vendor/jquery/jquery.js',
        'resources/vendor/bootstrap/js/bootstrap.bundle.js'
    ])
</head>
<body>
    <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <x-home-navbar-component />
            </nav>

            <main class="py-4">





                <!-- Page Content -->
                <div class="container">

                    <div class="row">

                        <!-- Blog Entries Column -->
                        <div class="col-md-8">





                            <x-home-blog-component id="blog-section">
                                <h1 class="my-4">Page Heading
                                    <small>Secondary Text</small>
                                </h1>
                            </x-home-blog-component>

                        </div>

                        <!-- Sidebar Widgets Column -->
                        <div class="col-md-4">

                            <x-home-sidebar-wedgets-component />

                        </div>

                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->









            </main>
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
