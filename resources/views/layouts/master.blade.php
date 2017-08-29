<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.meta')
    @include('layouts.css')
    @yield('css')
    @yield('title')
</head>

<body>

    <div id="app">

        <input type="checkbox" id="sidebar-toggle">

        <div id="page-container">

            @include('layouts.sidebar')

            @include('layouts.navbar')

            @yield('content')
            
            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.scripts')
</body>

</html>