<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-scroll-header>
    <div class="container"><a class="navbar-brand ms-3 ms-xl-4 logo" href="{{route('pages.index')}}"><img class="d-block" src="/img/logo/logo-dark.svg" width="116" alt="Finder"></a>
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        @guest()
            <a class="btn btn-sm text-primary d-none d-lg-block order-lg-3" href="#signin-modal" data-bs-toggle="modal"><i class="fi-user me-2"></i>ورود به حساب کاربری</a>
            <a class="btn btn-primary btn-sm ms-2 order-lg-3" href={{route('pages.agency_register')}}><i class="fi-plus me-2"></i>ثبت<span class=' d-sm-inline'> آژانس املاک</span></a>
        @endguest
        @auth()
            @switch(auth()->user()->user_type)
                @case('agency')
                    <a class="btn btn-primary btn-sm ms-2 order-lg-3" href={{route('agency.home')}}><i class="fi-dashboard me-2"></i><span class=' d-sm-inline'> ناحیه کاربری</span></a>
                    @break
                @case('consultant')
                    <a class="btn btn-primary btn-sm ms-2 order-lg-3" href={{route('consultant.home')}}><i class="fi-dashboard me-2"></i><span class=' d-sm-inline'> ناحیه کاربری</span></a>
                    @break
                @case('user')
                    <a class="btn btn-primary btn-sm ms-2 order-lg-3" href={{route('user.home')}}><i class="fi-dashboard me-2"></i><span class=' d-sm-inline'> ناحیه کاربری</span></a>
                    @break
                @case('admin')
                    <a class="btn btn-primary btn-sm ms-2 order-lg-3" href={{route('admin.home')}}><i class="fi-dashboard me-2"></i><span class=' d-sm-inline'> ناحیه کاربری</span></a>
                    @break
            @endswitch

        @endauth
        <div class="collapse navbar-collapse order-lg-2" id="navbarNav">
            <ul class="navbar-nav navbar-nav-scroll" style="max-height: 35rem;">
                <!-- Menu items-->
                <li class="nav-item "><a class="nav-link " href="{{route('pages.index')}}" role="button"  aria-expanded="false">خانه</a></li>
                <li class="nav-item "><a class="nav-link " href="{{route('pages.estate')}}" role="button"  aria-expanded="false">املاک</a></li>
                <li class="nav-item "><a class="nav-link " href="{{route('pages.articles')}}" role="button"  aria-expanded="false">مقالات</a></li>
                <li class="nav-item "><a class="nav-link " href="{{route('pages.contact')}}" role="button"  aria-expanded="false">ارتباط</a></li>
            </ul>
        </div>
    </div>
</header>
