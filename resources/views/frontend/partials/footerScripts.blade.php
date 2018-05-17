<!--[if lt IE 9]><script src="{{ asset('frontend/default/js/css3-mediaqueries.js') }}"></script><![endif]-->

<script src="{{ asset('frontend/default/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ asset('frontend/default/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript">
    $(function() { $( "#menu" ).menu(); });
</script>
@yield('scripts')