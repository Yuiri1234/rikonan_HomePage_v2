<!DOCTYPE html>
<html lang="ja">
    <head>
        @yield('head')
    </head>

    <body>
        @include('layout.header')
            <main>
                @yield('content')
            </main>
        @include('layout.footer')
    </body>
</html>
