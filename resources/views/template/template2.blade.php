<!DOCTYPE html>
<html lang="en">
@include('partials.header')
<body class="">
    @include('partials.sidebar')
    @include('partials.navbar')
    <div class="header bg-gradient-primary pb-5 pt-5 ">
    </div>
    @yield('content')
    
    {{-- @include('partials.footer') --}}
    @include('partials.footerscript')
</body>

</html>
