<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('Title', trans('backend/master.control-panel'))</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('frontend/default/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/default/colors.css') }}">

<style rel="stylesheet" type="text/css">
    @media screen and (min-width:400px) and (max-width:800px){
        body{font: lighter 12px Tahoma, Geneva, sans-serif;}
        .sections .expand{width:98%;}
        .categories .expand{width:49%;}
        .wd_categories_block .expand{width:99%;}
        .wd_right{min-width:164px;}
        .wd_left{width:592px;}
        .wd_content{min-width:760px;}
    }
    @media screen and (min-width:800px) and (max-width:990px){
        .wd_categories_block .wd_block{width:48%;}
        .categories .one_section{width:48%;}
    }
    @media only screen and (min-width : 320px) and (max-width : 568px) {
        body{font: lighter 12px Tahoma, Geneva, sans-serif;}
        .mobile{width:100%;}
        .sections .expand{width:98%;}
        .categories .expand{width:98%;}
        .wd_categories_block .expand{width:99%;}
        .wd_content{min-width:120px;}
        .mobile_hide{display:none;}
    }
</style>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

@yield('styles')