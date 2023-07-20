<aside class="col-lg-4 col-md-5 pe-xl-4 mb-5">
    <!-- Account nav-->
    <div class="card card-body border-0 shadow-sm pb-1 me-lg-1">
        <div class="d-flex d-md-block d-lg-flex align-items-start pt-lg-2 mb-4">
{{--            <img class="rounded-circle" src="{{asset('/storage/consultant_images/' . $consultant->image)}}" width="58" alt="{{$consultant->first_name}}">--}}
            <div class="pt-md-2 pt-lg-0 pe-3 pe-md-0 pe-lg-3">
                <h2 class="fs-lg mb-0">{{$user->name}}</h2>
            </div>
        </div><a class="btn btn-outline-secondary d-block d-md-none w-100 mb-3"
                 href="#account-nav" data-bs-toggle="collapse"><i class="fi-align-justify me-2"></i>منو</a>
        <div class="collapse d-md-block mt-3" id="account-nav">
            <div class="card-nav"><a class="card-nav-link" href="{{route('user.home')}}"><i
                        class="fi-user opacity-60 me-2"></i>درخواست های من</a>
                <a class="card-nav-link"
                                                                           href="real-estate-account-wishlist.html"><i class="fi-heart opacity-60 me-2"></i>موردعلاقه ها</a><a class="card-nav-link"
                                                                        href="real-estate-account-notifications.html"><i class="fi-bell opacity-60 me-2"></i>اطلاعیه
                    ها</a><a class="card-nav-link" href="#"><i class="fi-help opacity-60 me-2"></i>پشتیبانی</a><a
                    class="card-nav-link"  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fi-logout opacity-60 me-2"></i>خروج</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form></div>
        </div>
    </div>
</aside>
