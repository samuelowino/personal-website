<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
    <body>
    
        <header>
            @include('partials.mainheader')
        </header>

        <main>
            @yield('content')

            <div class="sidebar">
                This is the side bar
            </div>
        </main>

        <footer>
            @include('partials.footer')
        </footer>
            
            {{--Scripts--}}
    </body>
    @include('partials.scripts')

</html>