<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>{{config('app/name', 'testapp')}}</title>
    </head>
    <body class="auth">
        <div class="auth-body">
            @yield('content')
        </div>
    </body>
    <script src="{{asset('js/script.js')}}"></script>
</html>