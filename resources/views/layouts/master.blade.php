<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Arya Azadeh" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>سامانه جامع مشاوره املاک - آریا آزاده</title>

    <!-- Custom CSS -->
    <link href="{{asset('/assets/css/styles.css')}}" rel="stylesheet">
    @yield('style')

</head>

<body class="yellow-skin">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader"></div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    @include('layouts.navbar')

    @yield('content')
    <!-- ============================ Call To Action End ================================== -->

    <!-- ============================ Footer Start ================================== -->
    @include('layouts.footer')
    <!-- ============================ Footer End ================================== -->

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        <div class="modal-dialog modal-xl login-pop-form" role="document">
            <div class="modal-content overli" id="registermodal">
                <div class="modal-body p-0">
                    <div class="resp_log_wrap">
                        <div class="resp_log_thumb" style="background:url(assets/img/log.jpg)no-repeat;"></div>
                        <div class="resp_log_caption">
                            <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                            <div class="edlio_152">
                                <ul class="nav nav-pills tabs_system center" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true"><i class="fas fa-sign-in-alt ml-2"></i>ورود</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false"><i class="fas fa-user-plus ml-2"></i>ثبت نام</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                                    <div class="login-form">
                                        <form>

                                            <div class="form-group">
                                                <label>نام کاربری</label>
                                                <div class="input-with-icon">
                                                    <input type="text" class="form-control">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>کلمه عبور</label>
                                                <div class="input-with-icon">
                                                    <input type="password" class="form-control">
                                                    <i class="ti-unlock"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="eltio_ol9">
                                                    <div class="eltio_k1">
                                                        <input id="dd" class="checkbox-custom" name="dd" type="checkbox">
                                                        <label for="dd" class="checkbox-custom-label">مرا به خاطر بسپار</label>
                                                    </div>
                                                    <div class="eltio_k2">
                                                        <a href="#">کلمه عبور خود را فراموش کرده اید؟</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md full-width pop-login">ورود به سیستم</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                                    <div class="login-form">
                                        <form>

                                            <div class="form-group">
                                                <label>نام و نام خانوادگی</label>
                                                <div class="input-with-icon">
                                                    <input type="text" class="form-control">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>آدرس ایمیل</label>
                                                <div class="input-with-icon">
                                                    <input type="email" class="form-control">
                                                    <i class="ti-user"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>کلمه عبور</label>
                                                <div class="input-with-icon">
                                                    <input type="password" class="form-control">
                                                    <i class="ti-unlock"></i>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="eltio_ol9">
                                                    <div class="eltio_k1">
                                                        <input id="dds" class="checkbox-custom" name="dds" type="checkbox">
                                                        <label for="dds" class="checkbox-custom-label">با استفاده از وب سایت ، شرایط و ضوابط را می پذیرید</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-md full-width pop-login">ثبت نام</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Send Message -->
    <div class="modal fade" id="autho-message" tabindex="-1" role="dialog" aria-labelledby="authomessage" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="authomessage">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">ارسال کردن پیام</h4>
                    <div class="login-form">
                        <form>

                            <div class="form-group">
                                <label>موضوع</label>
                                <div class="input-with-icons">
                                    <input type="text" class="form-control" placeholder="عنوان پیام">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>پیام</label>
                                <div class="input-with-icons">
                                    <textarea class="form-control ht-80"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">ارسال پیام</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
@include('layouts.script')
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>

</html>
