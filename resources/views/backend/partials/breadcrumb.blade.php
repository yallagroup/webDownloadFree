<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('pageTitle')
        <small>{{ trans('backend/master.control-panel') }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('backend.dashboard') }}"><i class="fa fa-dashboard"></i> {{ trans('backend/master.control-panel') }}</a></li>
        @yield('breadcrumb')
    </ol>
</section>