<!DOCTYPE html>
<html lang="fa">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <title>سامانه جامع مشاورین املاک - آریا آزاده</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap Template">
    <meta name="author" content="َArya Azadeh">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#766df4">
    <meta name="theme-color" content="#ffffff">
    <!-- Page loading styles-->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-transition: all .4s .2s ease-in-out;
            transition: all .4s .2s ease-in-out;
            background-color: #1f1b2d;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }
        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-transition: opacity .2s ease-in-out;
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .page-loading.active > .page-loading-inner {
            opacity: 1;
        }
        .page-loading-inner > span {
            display: block;
            font-size: 1rem;
            font-weight: normal;
            color: #fff;;
        }
        .page-spinner {
            display: inline-block;
            width: 2.75rem;
            width: 2.75rem;
            height: 2.75rem;
            margin-bottom: .75rem;
            vertical-align: text-bottom;
            border: .15em solid #9691a4;
            border-right-color: transparent;
            border-radius: 50%;
            -webkit-animation: spinner .75s linear infinite;
            animation: spinner .75s linear infinite;
        }
        @-webkit-keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spinner {
            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <!-- Page loading scripts-->
    <script>
        (function () {
            window.onload = function () {
                var preloader = document.querySelector('.page-loading');
                preloader.classList.remove('active');
                setTimeout(function () {
                    preloader.remove();
                }, 2000);
            };
        })();

    </script>
    <!-- Vendor Styles-->
    @include('layouts.styles')
    @yield('style')
    <link rel="stylesheet" media="screen" href="{{asset('/css/theme.min.css')}}">

</head>
<!-- Body-->
<body dir="rtl">
<!-- Page loading spinner-->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div><span>لطفا منتظر باشید</span>
    </div>
</div>
<main class="page-wrapper">
    @guest()
        <!-- Sign In Modal-->
        <div class="modal fade" id="signin-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
                <div class="modal-content">
                    <div class="modal-body px-0 py-2 py-sm-0">
                        <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
                        <div class="row mx-0 align-items-center">
                            <div class="col-md-6 border-end-md p-4 p-sm-5">
                                <h2 class="h3 mb-4 mb-sm-5">سلام!<br>به سایت ما خوش آمدید.</h2><img class="d-block mx-auto rotate-img" src="/img/signin-modal/signin.svg" width="344" alt="Illustartion">
                                <div class="mt-4 mt-sm-5">هنوز ثبت نام نکرده اید؟ <a href="#signup-modal" data-bs-toggle="modal" data-bs-dismiss="modal">ثبت نام</a></div>
                            </div>
                            <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                                <form class="needs-validation" novalidate method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label mb-2" for="signin-email">پست الکترونیکی</label>
                                        <input class="form-control" type="email" name="email" id="signin-email" placeholder="ایمیل خود را وارد کنید" required>
                                    </div>
                                    <div class="mb-4">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <label class="form-label mb-0"  for="signin-password">رمز عبور</label><a class="fs-sm" href="#">رمز عبور را فراموش کرده اید؟</a>
                                        </div>
                                        <div class="password-toggle">
                                            <input class="form-control" type="password" name="password" id="signin-password" placeholder="پسوورد خود را وارد کنید" required>
                                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-lg w-100" type="submit">ورود به حساب کاربری</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up Modal-->
        <div class="modal fade" id="signup-modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
                <div class="modal-content">
                    <div class="modal-body px-0 py-2 py-sm-0">
                        <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
                        <div class="row mx-0 align-items-center">
                            <div class="col-md-6 border-end-md p-4 p-sm-5">
                                <h2 class="h3 mb-4 mb-sm-5">در سایت ما با اطمینان ثبت نام کنید.</h2>
                                <ul class="list-unstyled mb-4 mb-sm-5">
                                </ul><img class="d-block mx-auto" src="/img/signin-modal/signup.svg" width="344" alt="Illustartion">
                                <div class="mt-sm-4 pt-md-3">ثبت نام کرده اید؟ <a href="#signin-modal" data-bs-toggle="modal" data-bs-dismiss="modal">ورود به حساب کاربری</a></div>
                            </div>
                            <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                                <form class="needs-validation" novalidate method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-4">
                                        <label class="form-label" for="signup-name">نام و نام خانوادگی</label>
                                        <input class="form-control" type="text" id="signup-name" name="name" placeholder="نام و نام خانوادگی خود را وارد کنید" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="signup-email">پست الکترونیکی</label>
                                        <input class="form-control" type="email" id="signup-email" name="email" placeholder="ایمیل خود را وارد کنید" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="signup-email">شماره تلفن</label>
                                        <input class="form-control" type="text" id="signup-email" name="phone" placeholder="شماره تلفن خود را وارد کنید" required>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="signup-password">رمز عبور <span class='fs-sm text-muted'>حداقل 8 کاراکتر</span></label>
                                        <div class="password-toggle">
                                            <input class="form-control" name="password" type="password" id="signup-password" minlength="8" required>
                                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label" for="signup-password-confirm">تایید رمز عبور</label>
                                        <div class="password-toggle">
                                            <input class="form-control" name="password_confirmation" type="password" id="signup-password-confirm" minlength="8" required>
                                            <label class="password-toggle-btn" aria-label="Show/hide password">
                                                <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-lg w-100" type="submit">ثبت نام</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endguest
    <!-- Navbar-->
    @include('layouts.navbar')
    <!-- Page content-->
    <!-- Property cost calculator modal-->
   @yield('content')
</main>
<!-- Footer-->
@include('layouts.footer')
<!-- Back to top button-->
<a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2"></span><i class="btn-scroll-top-icon fi-chevron-up">   </i></a>
@include('layouts.script')
@yield('script')
<script src="{{asset('/js/theme.min.js')}}"></script>


</body>

</html>
