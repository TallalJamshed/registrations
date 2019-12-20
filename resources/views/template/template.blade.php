<!DOCTYPE html>
<html lang="en">
@include('partials.header')
<body class="">
    @include('partials.sidebar')
    @include('partials.navbar')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        @include('partials.cards')
    </div>
    @yield('content')
    @include('partials.footer')
    @include('partials.footerscript')
</body>

</html>
