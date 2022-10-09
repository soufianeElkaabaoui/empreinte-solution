<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @section('styles')
            {{-- put here custom stylesheets that is unique for the page --}}
        @show

        <div class="container">
            {{-- will be used to contain the page main content --}}
            @yield('content')
        </div>
        @section('scripts')
            {{-- put here custom scripts that is unique for the page --}}
        @endsection
    </body>
</html>
