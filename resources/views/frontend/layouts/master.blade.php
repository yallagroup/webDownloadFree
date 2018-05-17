<!DOCTYPE html>
<html>
<head>
    @include('frontend.partials.head')
</head>
<body>
    @include('frontend.partials.header')
    @include('frontend.partials.notifications')

    <div class="wd_content">
        <div class="wd_right mobile mobile_hide">
            @include('frontend.partials.sidebar')
        </div>
        <div class="wd_left mobile">
            @yield('breadcrumb')
            @yield('content')
        </div>
        <div class="clear"> </div>
    </div>

    @include('frontend.partials.footer')
    @include('frontend.partials.footerScripts')
</body>
</html>