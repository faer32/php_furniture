<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Стиль footer-a для главной страницы -->
    <!-- Favicons for different platforms -->
    @vite(['resources/css/my_css.css', 'resources/css/my_footer_css.css', 'resources/css/bootstrap.min.css', 
    'resources/js/app.js', 'resources/js/bootstrap.js', 'resources/js/bootstrap.bundle.min.js',
    'resources/js/jquery-3.7.0.min.js', 'resources/js/jquery-ajax.js', 'resources/js/jquery-events.js',  
    ])
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <title>@yield('title-block')</title>
</head>

<body>
    @if(!Request::is('admin*'))
        <header>
            @include('inc.head_inc')
        </header>   
    @endif   
    
    <!-- Контент -->
    <section>
        @if(!Request::is('admin*'))
            <header>
                @include('inc.catalog_inc')
            </header>   
        @endif
        @yield('content') 
    </section>  
    @if(Request::is('/'))
        <footer class="py-4 bg-dark">
            @include('inc.footer_inc')
        </footer>
    @endif
</body>

</html>