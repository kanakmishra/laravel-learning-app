<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('layouts.head')
    </head>
    <body>
    <div class="container">
        <header>
            @include('layouts.header')
        </header>
    <div id="main" class="row">
        @yield('content')
    </div>
    <footer>
        @include('layouts.footer')
    </footer>
    </div>
    </body>
</html>
