<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('messages.Ծառայություններ')}}</title>
    <style>
        @include('layouts.css')
    </style>
</head>
<body style="height: auto;">
<header>
    @include('layouts.header')
    @include('layouts.css')
    @yield('service')
</header>

<footer>
    @include('layouts.footer')
</footer>
</body>
</html>






