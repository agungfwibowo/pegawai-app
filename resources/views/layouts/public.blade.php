<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>App Name - @yield('title')</title>
        @vite(['resources/js/app.js'])
    </head>
    <body>
        @section('sidebar')
        <div>This is the master sidebar.</div>
        @show
 
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>