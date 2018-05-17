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
    <div class="wd_block cat_list">
        <div class="content categories">
            @foreach($homeCategories as $category)
                <div class="one_section expand">
                    <div class="title gradient">
                        <img src="{{ asset('frontend/default/img/icon_3.png') }}" alt="category" />
                        <span><a href="{{ route('category.show', ['id' => $category->id, 'slug' => $category->slug]) }}">{{ $category->title }}</a></span>
                        <b>{{ $category->programs->count() }}</b>
                    </div>
                    <ul>
                        @foreach($category->programs as $program)
                            <li>
                                <a href="{{ route('program.show', ['id' => $program->id, 'slug' => $program->slug]) }}">
                                    {{ $program->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    <div class="wd_categories_block hide">

        <div class="wd_block expand">
            <div class="title categories gradient">
                <img src="{{ asset('frontend/default/img/icon_1.png') }}" alt="category" />
                <span><a href="">برامج الانترنت</a></span>
                <b>22</b>
            </div>
            <div class="content sections">
                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_1.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_2.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_3.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="wd_block expand">
            <div class="title categories gradient">
                <img src="img/icon_2.png" alt="category" />
                <span><a href="">برامج التصميم والجرافيك</a></span>
                <b>343</b>
            </div>
            <div class="content sections">
                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_4.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_1.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_2.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="wd_block expand">
            <div class="title categories gradient">
                <img src="img/icon_3.png" alt="category" />
                <span><a href="">برامج الجوال والأجهزة اللوحية</a></span>
                <b>326</b>
            </div>
            <div class="content sections">
                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_1.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_2.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_3.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="wd_block expand">
            <div class="title categories gradient">
                <img src="img/icon_4.png" alt="category" />
                <span><a href="">برامج الانترنت</a></span>
                <b>22</b>
            </div>
            <div class="content sections">
                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_1.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_2.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_3.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="wd_block expand">
            <div class="title categories gradient">
                <img src="img/icon_1.png" alt="category" />
                <span><a href="">برامج التصميم والجرافيك</a></span>
                <b>343</b>
            </div>
            <div class="content sections">
                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_4.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_1.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_2.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="wd_block expand">
            <div class="title categories gradient">
                <img src="img/icon_2.png" alt="category" />
                <span><a href="">برامج الجوال والأجهزة اللوحية</a></span>
                <b>326</b>
            </div>
            <div class="content sections">
                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_1.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_2.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_3.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="wd_block expand">
            <div class="title categories gradient">
                <img src="img/icon_3.png" alt="category" />
                <span><a href="">برامج الانترنت</a></span>
                <b>22</b>
            </div>
            <div class="content sections">
                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_1.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_2.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_3.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="wd_block expand">
            <div class="title categories gradient">
                <img src="img/icon_4.png" alt="category" />
                <span><a href="">برامج التصميم والجرافيك</a></span>
                <b>343</b>
            </div>
            <div class="content sections">
                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_4.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_1.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_2.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="wd_block expand">
            <div class="title categories gradient">
                <img src="img/icon_1.png" alt="category" />
                <span><a href="">برامج الجوال والأجهزة اللوحية</a></span>
                <b>326</b>
            </div>
            <div class="content sections">
                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_1.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_2.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

                <div class="one_section">
                    <div class="photo">
                        <img src="img/icon_3.png" alt="icon" />
                    </div>
                    <div class="title">
                        <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                    </div>

                    <div class="details">
                        من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                    </div>
                    <div class="stats">
                        <span>مرات التحميل : 782</span>
                        <span>بتاريخ : 2009-08-07</span>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="wd_block">
        <div class="title folder gradient">
            <span><a href="">جديد البرامج</a></span>
        </div>
        <div class="content sections">

            <div class="one_section expand">
                <div class="photo">
                    <img src="img/icon_1.png" alt="icon" />
                </div>
                <div class="title">
                    <a href="">تحميل برنامج الفايرفوكس Download FireFox</a>
                </div>

                <div class="details">
                    من أقوى برامج مكافحة الفايروسات حائز على جوائز عدة من عدة مجلات و مراكز ابحاث اصبح الان مع ميزات عديدة منها الحمايه ضد ملفات التجسس و حمايتك اثناء تصفح المواقع . بالاضاقة للفايروول وبالطبع البرنامج غنى عن التعريف ...
                </div>
                <div class="stats">
                    <span>مرات التحميل : 782</span>
                    <span>بتاريخ : 2009-08-07</span>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')

@endsection