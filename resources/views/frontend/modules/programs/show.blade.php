@extends('frontend.layouts.master')

@section('Title'){{ trans('backend/master.control-panel') }} - {{ trans('backend/programs.create') }}@endsection

@section('breadcrumb')
    <nav>
        <span class="home"><a href="">مكتبة البرامج الذكية</a></span>
        <span><a href="">برامج الإنترنت</a></span>
    </nav>
@endsection

@section('styles')

@endsection

@section('content')
    <div class="wd_block category download">
        <div class="content">
            <div class="nav">
                <div class="category_title">
                    {{ $program->views }}
                    {{ $program->title }}
                </div>
            </div>

            <div class="social">
                <!-- Yalla Facebook -->
                <div class="fb-like" data-href="https://www.facebook.com/Ar.Download" data-width="66" data-layout="box_count" data-action="like" data-show-faces="false" data-share="false"></div>
                <!-- End Yalla Facebook -->
                <!-- Yalla Twitter -->
                <a href="http://twitter.com/share" class="twitter-share-button" data-url="https://twitter.com/ArDownload" data-count="vertical">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                <!-- End Yalla Twitter -->
            </div>

            <div class="advert">
                <img src="img/adv_250.png" alt="Advert" />
            </div>

            <div class="software">
                <div class="info">
                    <div class="photo">
                        <img src="{{ asset('uploads/images/' . $program->icon) }}" style="width: 150px" alt="Firefox" />
                    </div>
                    <div class="tech">
                        <span><b>أضيف بتاريخ :</b> 12 ديسمبر 2013</span>
                        <span><b>مرات المشاهده :</b> 34</span>
                        <span><b>مرات التحميل :</b> 34</span>
                    </div>
                </div>

                <div class="details">
                    متصفح فاير فوكس بسيط واكثر من رائع وغني عن التعريف.المتصفح الافضل حاليا و له العديد من المميزات الرائعة منافس قوي لمتصفح انترنت اكسبلورر .يتميز بسرعة التصفح كما انه يحتوي على مميزات مثل تنظيم الصفحات على شكل تابز في اعلى الصفحة  واداة منع النوافذ المنبثقة  والتصفح الخاص.وايضا يدعم ميزة الأخبار الفورية RSS والعديد من الـ Plugins التي تعطيك عالم كامل من الإضافات مثل الحالة الجوية وبرامج إدارة التحميل المرفقة بالاضافة الى الألوان والثيمات.وهو متوافق مع جميع اصدارات مايكروسوفت وندوز.
                </div>
            </div>

        </div>
    </div>

    <div class="wd_block category">
        <div class="content">
            <div class="nav">
                <div class="category_title">
                    التحميل
                </div>
            </div>
            <div class="download">

            </div>
        </div>
    </div>

    <div class="wd_block category">
        <div class="content">
            <div class="nav">
                <div class="category_title">
                    تعليقات
                </div>
            </div>
            <div class="comments">
                <!-- Facebook Comments -->
                <div id="fb-root"> </div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                <div class="fb-comments" data-href="http://localhost/softs_1/" data-num-posts="4" data-width="600"> </div>
                <!-- /Facebook Comments -->
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection