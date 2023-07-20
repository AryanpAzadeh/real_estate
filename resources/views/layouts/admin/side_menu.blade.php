<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin.home')}}">
                    <h2 class="brand-text mb-0">مشاوره املاک</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="bx bx-x d-block d-xl-none font-medium-4 primary"></i><i class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block primary" data-ticon="bx-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="lines">
            <li class=" navigation-header"><span>داشبورد</span></li>
            <li class=" nav-item"><a href="{{route('admin.home')}}"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Email">داشبورد</span></a>

            <li class=" navigation-header"><span>آژانس ها</span></li>
            <li class=" nav-item"><a href="{{route('admin.agency')}}"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Email">لیست آژانس ها</span></a>

            <li class=" navigation-header"><span>مقالات</span></li>
            <li class=" nav-item"><a href="{{route('admin.article')}}"><i class="menu-livicon" data-icon="morph-checkbox-3"></i><span class="menu-title" data-i18n="Email">مقالات</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.article.category')}}"><i class="menu-livicon" data-icon="box"></i><span class="menu-title" data-i18n="Email">دسته بندی ها</span></a>
            </li>

            <li class=" navigation-header"><span>تنظیمات آگهی ها</span></li>
            <li class=" nav-item"><a href="{{route('admin.types')}}"><i class="menu-livicon" data-icon="desktop"></i><span class="menu-title" data-i18n="Email">نوع املاک</span></a>



        </ul>
    </div>
</div>
<!-- END: Main Menu-->
