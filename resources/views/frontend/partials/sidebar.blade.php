<div class="wd_block">
    <div class="title gradient">
        <span>القائمة الرئيسية</span>
    </div>
    <div class="content">
        <ul id="menu">
            @foreach($mainCategories as $category)
                <li><a href="{{ route('category.show', ['id' => $category->id, 'slug' => $category->slug]) }}">{{ $category->title }}</a></li>
                @if( count($category->childs) )
                    <ul>
                        @foreach($category->childs as $child)
                            <li><a href="{{ route('category.show', ['id' => $child->id, 'slug' => $child->slug]) }}">{{ $child->title }}</a></li>
                        @endforeach
                    </ul>
                @endif
            @endforeach
        </ul>
    </div>
</div>
<div class="wd_block">
    <div class="title gradient">
        <span>إحصائيات</span>
    </div>
    <div class="content">
        <div class="one_stats">
            <div class="one_proparty">عدد البرامج :</div>
            <span>2374</span>
        </div>
        <div class="one_stats">
            <div class="one_proparty">مرات التحميل :</div>
            <span>1250347</span>
        </div>
        <div class="one_stats">
            <div class="one_proparty">المتواجدون الآن:</div>
            <span>34</span>
        </div>
    </div>
</div>
<div class="wd_block">
    <div class="title gradient">
        <span>الأكثر تحميلاً</span>
    </div>
    <div class="content">
        <ul>
            <li><a href="#">تحميل برنامج الفايرفوكس Download FireFox</a></li>
            <li><a href="#">جوجل كروم المتصفح الشهير من جوجل Google Chrome</a></li>
            <li><a href="#">تحميل برنامج الفايرفوكس بأحدث إصدار</a></li>
            <li><a href="#">جوجل كروم المتصفح الشهير من جوجل</a></li>
            <li><a href="#">تحميل برنامج الفايرفوكس Download FireFox</a></li>
        </ul>
    </div>
</div>
<div class="wd_block">
    <div class="title gradient">
        <span>مساحة إعلانية</span>
    </div>
    <div class="content">
        <div class="center">
            <img src="img/adv_160.jpg" />
        </div>
    </div>
</div>
<div class="wd_block">
    <div class="title gradient">
        <span>برامج ننصح بها</span>
    </div>
    <div class="content">
        <ul>
            <li><a href="#">تحميل برنامج الفايرفوكس Download FireFox</a></li>
            <li><a href="#">تحميل برنامج الفايرفوكس بأحدث إصدار</a></li>
            <li><a href="#">جوجل كروم المتصفح الشهير من جوجل</a></li>
            <li><a href="#">تحميل برنامج الفايرفوكس Download FireFox</a></li>
            <li><a href="#">تحميل برنامج الفايرفوكس بأحدث إصدار</a></li>
            <li><a href="#">جوجل كروم المتصفح الشهير من جوجل</a></li>
            <li><a href="#">تحميل برنامج الفايرفوكس Download FireFox</a></li>
            <li><a href="#">جوجل كروم المتصفح الشهير من جوجل</a></li>
            <li><a href="#">تحميل برنامج الفايرفوكس Download FireFox</a></li>
            <li><a href="#">تحميل برنامج الفايرفوكس بأحدث إصدار</a></li>
        </ul>
    </div>
</div>