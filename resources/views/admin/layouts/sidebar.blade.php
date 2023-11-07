<div id="dw-s1" class="bmd-layout-drawer bg-faded ">

    <div class="container-fluid side-bar-container ">
        <header class="pb-0">
            <a class="navbar-brand ">
                <object class="side-logo" data="{{ asset('admin/svg/logo-8.svg') }}" type="image/svg+xml">
                </object>
            </a>
        </header>
        <p class="side-comment  fnt-mxs">گشت</p>
        <ul class="side a-collapse short ">
            <a class="ul-text  fnt-mxs"><i class="fas fa-tachometer-alt mr-1"></i> مقالات
                <!-- <span class="badge badge-info">4</span> -->
                <i class="fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item "><a href="{{ route('posts.create') }}" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>جدید</a>
                </li>
                <li class="side-item "><a href="{{ route('posts.index') }}" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>مدیریت</a>
                </li>

            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text  fnt-mxs"><i class="fas fa-cog mr-1"></i> دسته بندی ها
                <!-- <span	class="badge badge-success">4</span> -->
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item"><a href="{{ route('categories.create') }}" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>جدید</a></li>
                <li class="side-item"><a href="{{ route('categories.list') }}" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>مدیریت</a></li>
            </div>
        </ul>

        <ul class="side a-collapse short">
            <a class="ul-text  fnt-mxs"><i class="fas fa-cog mr-1"></i>اسلایدرها
                <!-- <span	class="badge badge-success">4</span> -->
                <i class="fas fas fa-chevron-down arrow"></i></a>
            <div class="side-item-container hide animated">
                <li class="side-item"><a href="{{ route('sliders.create') }}" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>جدید</a></li>
                <li class="side-item"><a href="{{ route('sliders.index') }}" class="fnt-mxs"><i class="fas fa-angle-right mr-2"></i>مدیریت</a></li>
            </div>
        </ul>


        <p class="side-comment  fnt-mxs">پشتیبانی</p>
        <li class="side a-collapse short ">
            <a href="https://github.com/rralireza" class="side-item  fnt-mxs "><i class=" fab fa-github mr-1"></i>GitHub</a>
        </li>
        <li class="side a-collapse short ">
            <a href="https://github.com/MajidAlinejad/Nozha-rtl-Dashboard" class="side-item  fnt-mxs "><i class=" far fa-question-circle mr-1"></i>گزارش باگ</a>
        </li>
        <li class="side a-collapse short ">
            <a href="https://github.com/MajidAlinejad/Nozha-rtl-Dashboard" class="side-item  fnt-mxs "><i class=" far fa-life-ring mr-1"></i>حل مشکل</a>
        </li>

{{--        <p class="side-comment  fnt-mxs">اهدا</p>--}}
{{--        <li class="side a-collapse short pb-5">--}}
{{--            <a href="https://donateon.ir/alinejad.mj" class="side-item  fnt-mxs "><i class=" fas fa-coffee mr-1"></i>کمک به توسعه دهنده </a>--}}
{{--        </li>--}}


    </div>

</div>
