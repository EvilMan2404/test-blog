<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>TEST - BLOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="blog, news, test" name="description"/>
    <meta content="Coderthemes" name=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    @include('layouts.head')

</head>

<body>
@include('layouts.nav')
<!-- Begin page -->
<main role="main">
    <!-- Start content -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Добрый день!</h1>
            <p>Это тестовый блог, который создан для проверки навыков программирования.</p>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <!-- content -->
</main>
@include('layouts.footer')
<!-- END wrapper -->
@include('layouts.footer-script')
</body>
</html>
