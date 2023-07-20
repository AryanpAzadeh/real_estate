<aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
    <!-- Account nav-->
    <div class="card card-body border-0 shadow-sm pb-1 me-lg-1">
        <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4">
{{--            <img class="rounded-circle" src="img/avatars/03.jpg" width="48" alt="Annette Black">--}}
            <div class="pt-md-2 pt-lg-0 pe-3 pe-md-0 pe-lg-3">
                <h2 class="fs-lg mb-0">{{auth()->user()->name}}</h2>
                <ul class="list-unstyled fs-sm mt-3 mb-0">
                    <li><a class="nav-link fw-normal p-0" href="tel:{{$agency->phone}}"><i
                                class="fi-phone opacity-60 me-2"></i>{{$agency->phone}}</a></li>
                    <li><a class="nav-link fw-normal p-0" href="mailto:{{$agency->email}}"><i
                                class="fi-mail opacity-60 me-2"></i>{{$agency->email}}</a></li>
                </ul>
            </div>
        </div><a class="btn btn-primary btn-lg w-100 mb-3" href="{{route('agency.new_estate')}}"><i
                class="fi-plus me-2"></i> ثبت ملک</a><a class="btn btn-outline-secondary d-block d-md-none w-100 mb-3"
                                                        href="#account-nav" data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>منو</a>
        <div class="collapse d-md-block mt-3" id="account-nav">
            <div class="card-nav"><a class="card-nav-link" href="{{route('agency.home')}}"><i
                        class="fi-user opacity-60 me-2"></i>اطلاعات حساب کاربری</a>
                <a class="card-nav-link" href="{{route('agency.consultant')}}"><i
                        class="fi-user opacity-60 me-2"></i>مشاورین املاک من</a>
                <a class="card-nav-link"
                                                                                      href="real-estate-account-security.html"><i class="fi-lock opacity-60 me-2"></i>گذرواژه و
                    امنیتی</a><a class="card-nav-link" href="{{route('agency.estates')}}"><i
                        class="fi-home opacity-60 me-2"></i>املاک من</a><a class="card-nav-link"
                                                                           href="real-estate-account-wishlist.html"><i class="fi-heart opacity-60 me-2"></i>موردعلاقه ها</a><a
                    class="card-nav-link" href="real-estate-account-reviews.html"><i
                        class="fi-star opacity-60 me-2"></i>نظرات</a><a class="card-nav-link"
                                                                        href="real-estate-account-notifications.html"><i class="fi-bell opacity-60 me-2"></i>اطلاعیه
                    ها</a><a class="card-nav-link" href="#"><i class="fi-help opacity-60 me-2"></i>پشتیبانی</a><a
                    class="card-nav-link"  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fi-logout opacity-60 me-2"></i>خروج</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</aside>
