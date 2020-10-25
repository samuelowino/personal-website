<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
    <body class="container">
    
        <header>
            @include('partials.mainheader')
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="footer">
            @include('partials.footer')
        </footer>
            
            {{--Scripts--}}
    </body>
    @include('partials.scripts')
</html>