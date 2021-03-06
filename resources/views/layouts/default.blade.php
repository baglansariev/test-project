@inject('header','App\Http\Controllers\Partials\HeaderController')
@inject('footer','App\Http\Controllers\Partials\FooterController')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        {{ $header->show() }}
        <main>
            @yield('content')
        </main>
        {{ $footer->show() }}

        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/particles/particles.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>