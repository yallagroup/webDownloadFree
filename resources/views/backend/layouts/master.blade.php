<!DOCTYPE html>
<html>
<head>
    @include('backend.partials.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        @include('backend.partials.header')
        @include('backend.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- /.content-wrapper -->
        @include('backend.partials.footer')
    </div>
    <!-- ./wrapper -->
    @include('backend.partials.footerScripts')
</body>
</html>