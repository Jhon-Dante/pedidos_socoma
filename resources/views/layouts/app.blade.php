<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
<head>
    
    @include('layouts.css')
    @include('layouts.css2')
    @yield('css')
    @toastr_css
</head>
<body>
    <div id="app">
            
        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->
        <!-- preloader area start -->
        <div id="preloader">
            <div class="loader"></div>
        </div>
        <!-- preloader area end -->
        <div class="page-container">
            @include('layouts.sidebar')
            <div class="main-content">
                @include('layouts.header')
                <div class="main-content-inner">
                    <div class="mt-5 mb-5">
                        @yield('content')
                    </div>
                </div>
            </div>
            @include('layouts.footer')
        </div>
        @include('layouts.menuLateral')
    </div>
    @include('layouts.scripts')
</body>
@jquery
@toastr_js
@toastr_render
</html>
