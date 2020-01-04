<!DOCTYPE html>
<html lang="en">
    @include('frontend.partials.header')
    <body>
        <!-- Navbar -->
        <header>
            @include('frontend.partials.navbar')
        </header>
        @yield('content')
        <!-- Footer -->
        @include('frontend.partials.footer')
        @include('frontend.partials.footerscripts')
    </body>
</html>