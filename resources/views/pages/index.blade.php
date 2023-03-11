@extends('layouts.master')

@section('content')
    <div class="modal fade" id="cost-calculator" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block position-relative border-0 px-sm-5 px-4">
                    <h3 class="h4 modal-title mt-4 text-center">به دنبال خانه هستید؟</h3>
                    <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-sm-5 px-4">
                    <form class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label class="form-label fw-bold mb-2" for="property-city">انتخاب موقعیت</label>
                            <select class="form-control form-select" id="property-city" required>
                                <option value="" selected disabled hidden>انتخاب شهر</option>
                                <option value="Chicago">شیکاگو</option>
                                <option value="Dallas">پاریس</option>
                                <option value="Los Angeles">فرانسه</option>
                                <option value="New York">نیویورک</option>
                                <option value="San Diego">سن فراسیسکو</option>
                            </select>
                            <div class="invalid-feedback">لطفا شهر را انتخاب کنید.</div>
                        </div>
                        <div class="mb-3">
                            <select class="form-control form-select" id="property-district" required>
                                <option value="" selected disabled hidden>انتخاب منطقه</option>
                                <option value="Brooklyn">سوییس</option>
                                <option value="Manhattan">پاریس</option>
                                <option value="Staten Island">آمستردام</option>
                                <option value="The Bronx">سوئد</option>
                                <option value="Queens">برزیل</option>
                            </select>
                            <div class="invalid-feedback">لطفا منطقه را انتخاب کنید.</div>
                        </div>
                        <div class="pt-2 mb-3">
                            <label class="form-label fw-bold mb-2" for="property-address">آدرس</label>
                            <input class="form-control" type="text" id="property-address" placeholder="آدرس را وارد کنید" required>
                            <div class="invalid-feedback">آدرس ملک را انتخاب کنید0</div>
                        </div>
                        <div class="pt-2 mb-3">
                            <label class="form-label fw-bold mb-2">تعداد اتاق</label>
                            <div class="btn-group" role="group" aria-label="Choose number of rooms">
                                <input class="btn-check" type="radio" id="rooms-1" name="rooms">
                                <label class="btn btn-outline-secondary" for="rooms-1">1</label>
                                <input class="btn-check" type="radio" id="roome-2" name="rooms">
                                <label class="btn btn-outline-secondary" for="roome-2">2</label>
                                <input class="btn-check" type="radio" id="roome-3" name="rooms">
                                <label class="btn btn-outline-secondary" for="roome-3">3</label>
                                <input class="btn-check" type="radio" id="rooms-4" name="rooms">
                                <label class="btn btn-outline-secondary" for="rooms-4">4</label>
                                <input class="btn-check" type="radio" id="rooms-5" name="rooms">
                                <label class="btn btn-outline-secondary" for="rooms-5">5+</label>
                            </div>
                        </div>
                        <div class="pt-2 mb-4">
                            <label class="form-label fw-bold mb-2" for="property-area">متراژ (متر مربع)</label>
                            <input class="form-control" type="text" id="property-area" placeholder="متراژ را وارد کنید" required>
                            <div class="invalid-feedback">متراژ را وارد کنید</div>
                        </div>
                        <button class="btn btn-primary d-block w-100 mb-4" type="submit"><i class="fi-calculator me-2"></i>محاسبه</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero-->
    <section class="container-fluid my-5 pt-5 pb-lg-4 px-xxl-4">
        <div class="jarallax card align-items-center justify-content-center border-0 p-md-5 p-4 bg-secondary overflow-hidden mt-n3" style="min-height: 65vh; background-image: url(img/real-estate/hero-image-v2.jpg);" data-jarallax data-speed="0.5"><span class="img-overlay opacity-40"></span>
            <div class="content-overlay" style="max-width: 856px;">
                <h1 class="display-5 mb-5 pb-md-3 px-md-3 text-white text-center">راه آسان برای پیدا کردن یک ملک مناسب</h1>
                <form class="form-group d-block">
                    <div class="row g-0">
                        <div class="col-md-10 d-sm-flex align-items-center">
                            <div class="dropdown w-sm-50 border-end-sm" data-bs-toggle="select">
                                <button class="btn btn-lg btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-home me-2"></i><span class="dropdown-toggle-label">اجاره</span></button>
                                <input type="hidden">
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">اجاره</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">فروش</span></a></li>
                                </ul>
                            </div>
                            <hr class="d-sm-none my-2">
                            <div class="dropdown w-sm-50 border-end-sm" data-bs-toggle="select">
                                <button class="btn btn-lg btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-map-pin me-2"></i><span class="dropdown-toggle-label">موقعیت</span></button>
                                <input type="hidden">
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">خانه</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">آپارتمان</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">تجاری و اداری</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">سوئیت</span></a></li>
                                </ul>
                            </div>
                            <hr class="d-sm-none my-2">
                            <div class="dropdown w-sm-50" data-bs-toggle="select">
                                <button class="btn btn-lg btn-link dropdown-toggle ps-2 ps-sm-3" type="button" data-bs-toggle="dropdown"><i class="fi-list me-2"></i><span class="dropdown-toggle-label">نوع ملک</span></button>
                                <input type="hidden">
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">خانه</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">آپارتمان</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">تجاری و اداری</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">سوئیت</span></a></li>
                                    <li><a class="dropdown-item" href="#"><span class="dropdown-item-label">زمین</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <hr class="d-md-none mt-2">
                        <div class="col-md-2 d-sm-flex align-items-center pt-3 pt-md-0">
                            <button class="btn btn-lg btn-icon btn-primary px-3 w-100" type="button">جستجو</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="container mb-5 pb-lg-4">
        <div class="row">
            <div class="col-lg-6 col-md-7">
                <div class="row gy-4">
                    <div class="col-md-5 col-sm-6">
                        <h2 class="h3 mb-0 ">ما بهترین ها در بازار مسکن هستیم!</h2>
                    </div>
                    <div class="col-sm-6 offset-md-1">
                        <p class="mb-0">صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p>
                    </div>
                </div>
                <div class="py-3">
                    <hr class="my-4">
                </div>
                <div class="row row-cols-md-3 row-cols-1 gy-4 gx-lg-5 gx-3 text-center px-lg-4">
                    <div class="col"><img class="d-block mx-auto mb-3" src="img/real-estate/brands/trustpilot.svg" alt="Trustpilot">
                        <h5 class="mb-1">عالی</h5><span class="fs-sm">امتیاز 4.8 از 5</span>
                    </div>
                    <div class="col">
                        <h5 class="h2 mb-2">200 هزار</h5><span class="fs-sm">لیست املاک جدید در سراسر جهان</span>
                    </div>
                    <div class="col">
                        <h5 class="h2 mb-2">3.8</h5><span class="fs-sm">میانگین درآمد سالانه هر صاحبخانه</span>
                    </div>
                </div>
            </div>
            <div class="col-md-5 offset-lg-1"><img class="d-block mx-auto rotate-img" src="img/real-estate/illustrations/find-alt.svg" alt="Illustration"></div>
        </div>
    </section>
    <!-- Newly listed properties-->
    <section class="container mt-n3 mt-md-0 mb-5 pb-3 pb-lg-4">
        <div class="d-flex align-items-end justify-content-between mb-4 pb-md-2">
            <h2 class="h3 mb-0 ">املاک ویژه ما</h2><a class="btn btn-link fw-normal ms-2 p-0" href="real-estate-catalog-sale.html">مشاهده همه<i class="fi-arrow-long-left ms-2"></i></a>
        </div>
        <!-- Carousel-->
        <div class="tns-carousel-wrapper">
            <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;speed&quot;: 800, &quot;nav&quot;: false, &quot;controlsContainer&quot;: &quot;#carousel-controls-lp&quot;}">
                <!-- Item-->
                <div>
                    <div class="row">
                        <div class="col-lg-8 col-md-7 mb-md-0 mb-3">
                            <div class="position-relative pr-lg-5">
                                <div class="position-absolute top-0 start-0 zindex-1 m-3 p-1"><span class="badge bg-info fs-sm me-2">جدید</span><span class="badge bg-success fs-sm me-2">تاییده شده</span></div><img class="rounded-3 zindex-5" src="img/real-estate/recent/04.jpg" alt="Article image">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5"><span class="d-inline-block fs-sm text-uppercase text-primary mb-2 from-top">فروشی</span>
                            <div class="from-end delay-2">
                                <h3 class="h4 mb-2">آپارتمان 3خوابه</h3>
                                <p class="mb-md-4 mb-3 fs-sm">تهران، خیابان سعادت آباد، خیابان سرو غربی مجتمع رویا</p>
                                <ul class="d-flex mb-md-4 mb-3 list-unstyled">
                                    <li class="me-3 ps-3 border-end"><b class="ms-1">4</b><i class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
                                    <li class="me-3 ps-3 border-end"><b class="ms-1">2</b><i class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
                                    <li class="me-3 ps-3 border-end"><b class="ms-1">2</b><i class="fi-car mt-n1 lead align-middle text-muted"></i></li>
                                    <li><b>126 </b>مترمربع</li>
                                </ul>
                                <p class="mb-4 pb-md-2">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                            <div class="btn-group btn-group-lg scale-up delay-3" role="group" aria-label="خرید یا نشان کردن">
                                <button class="btn btn-primary px-3 border-start border-light" data-bs-toggle="tooltip" data-bs-placement="top" title="نشان کردن"><i class="fi-heart fs-5"></i></button>
                                <a class="btn btn-primary" href="real-estate-single-v1-v2.html">قیمت 120 میلیون تومان</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div>
                    <div class="row">
                        <div class="col-lg-8 col-md-7 mb-md-0 mb-3">
                            <div class="position-relative pr-lg-5">
                                <div class="position-absolute top-0 start-0 zindex-1 m-3 p-1"><span class="badge bg-info fs-sm me-2">جدید</span><span class="badge bg-success fs-sm me-2">تاییده شده</span></div><img class="rounded-3 zindex-5" src="img/real-estate/recent/05.jpg" alt="Article image">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5"><span class="d-inline-block fs-sm text-uppercase text-primary mb-2 from-top">اجاره ای</span>
                            <div class="from-end delay-2">
                                <h3 class="h4 mb-2">ویلا لوکس در لوس آنجلس</h3>
                                <p class="mb-md-4 mb-3 fs-sm">خیابان سعادت آباد، خیابان سرو غربی</p>
                                <ul class="d-flex mb-md-4 mb-3 list-unstyled">
                                    <li class="me-3 ps-3 border-end"><b class="ms-1">5</b><i class="fi-bed mt-n1 lead align-middle text-muted"></i></li>
                                    <li class="me-3 ps-3 border-end"><b class="ms-1">3</b><i class="fi-bath mt-n1 lead align-middle text-muted"></i></li>
                                    <li class="me-3 ps-3 border-end"><b class="ms-1">1</b><i class="fi-car mt-n1 lead align-middle text-muted"></i></li>
                                    <li><b>140 </b>مترمربع</li>
                                </ul>
                                <p class="mb-4 pb-md-2">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            </div>
                            <div class="btn-group btn-group-lg scale-up delay-3" role="group" aria-label="Buy now or add to wishlist"><a class="btn btn-primary" href="#">اجاره برای 50 میلیون تومان</a>
                                <button class="btn btn-primary px-3 border-start border-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Add to Wishlist"><i class="fi-heart fs-5"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel custom controls-->
        <div class="tns-carousel-controls pt-2 mt-4" id="carousel-controls-lp">
            <button class="me-3" type="button"><i class="fi-chevron-left fs-xs"></i></button>
            <button type="button"><i class="fi-chevron-right fs-xs"></i></button>
        </div>
    </section>
    <!-- Discover locations-->
    <section class="container mb-5 pb-lg-5 pb-4">
        <div class="d-flex align-items-start justify-content-between mb-3 mb-md-4 pb-md-2">
            <div class="d-flex flex-md-row flex-column align-items-center">
                <h2 class="h3 mb-4 mb-md-0 ">شهرهای پیشنهادی ما</h2>
                <ul class="nav nav-tabs mb-0 me-md-4 me-n3 pl-lg-2" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#">اجاره</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">فروش</a></li>
                </ul>
            </div><a class="btn btn-link fw-normal ms-2 p-0" href="real-estate-catalog-rent.html">مشاهده همه<i class="fi-arrow-long-left ms-2"></i></a>
        </div>
        <!-- Carousel-->
        <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush mx-n2">
            <div class="tns-carousel-inner row gx-4 mx-0 py-3" data-carousel-options="{&quot;items&quot;: 3, &quot;controls&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3}}}">
                <div class="col">
                    <div class="card card-hover border-0 shadow-sm h-100 p-2">
                        <div class="card-body p-4"><img class="d-block rounded-3 mb-3" src="img/real-estate/locations/usa.svg" width="80">
                            <h4 class="h5 mb-2 ">موقعیت های عالی</h4><span class="fs-sm text-muted">پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</span>
                            <hr class="my-4">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">نیویورک</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">لوس آنجلس</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">کانادا</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">آرژانتین</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">فیلیپین</a></li>
                                <li class="nav-item"><a class="nav-link p-0 fw-normal" href="#">شیکاگو</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-hover border-0 shadow-sm h-100 p-2">
                        <div class="card-body p-4"><img class="d-block rounded-3 mb-3" src="img/real-estate/locations/city.svg" width="80">
                            <h4 class="h5 mb-2 ">موقعیت های شهری</h4><span class="fs-sm text-muted">طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</span>
                            <hr class="my-4">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">سن فراسیسکو</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">آمستردام</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">دبی</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">مکزیک</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">چین</a></li>
                                <li class="nav-item"><a class="nav-link p-0 fw-normal" href="#">پاریس</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-hover border-0 shadow-sm h-100 p-2">
                        <div class="card-body p-4"><img class="d-block rounded-3 mb-3" src="img/real-estate/locations/field.svg" width="80">
                            <h4 class="h5 mb-2 ">موقعیت های ویژه</h4><span class="fs-sm text-muted">صنعت چاپ و با استفاده از طراحان گرافیک است.</span>
                            <hr class="my-4">
                            <ul class="nav flex-column mb-0">
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">استرالیا</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">شیکاگو</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">آلمان</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">کالیفرنیا</a></li>
                                <li class="nav-item mb-2 pb-1"><a class="nav-link p-0 fw-normal" href="#">آمریکا</a></li>
                                <li class="nav-item"><a class="nav-link p-0 fw-normal" href="#">مجارستان</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top properties-->
    <section class="container-fluid px-xxl-4 mb-5 pb-lg-4">
        <h2 class="h3 mb-4 pb-2 text-center ">جدیدترین املاک</h2>
        <!-- Carousel-->
        <div class="tns-carousel-wrapper tns-nav-outside tns-nav-outside-flush mx-n2">
            <div class="tns-carousel-inner row gx-4 mx-0" data-carousel-options="{&quot;nav&quot;: false, &quot;autoHeight&quot;: true, &quot;controlsContainer&quot;: &quot;#carousel-controls-tp&quot;, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;1320&quot;:{&quot;items&quot;:2}}}">
                <!-- Carousel item-->
                <div class="col">
                    <div class="row gy-md-0 gy-sm-4 gy-3 gx-sm-4 gx-0">
                        <div class="col-md-7"><a class="text-decoration-none text-light card bg-size-cover bg-position-center border-0 overflow-hidden h-100" href="real-estate-single-v1-v1.html" style="background-image: url(img/real-estate/top-properties/01.jpg); min-height: 18.75rem;"><span class="img-gradient-overlay"></span>
                                <div class="card-body content-overlay pb-0"></div>
                                <div class="card-footer content-overlay border-0 pt-0 pb-4">
                                    <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5">
                                        <div class="pe-2">
                                            <div class="fs-sm text-uppercase pt-2 mb-1">فروش</div>
                                            <h3 class="h5 text-light mb-1">ویلا لوکس با گاراژ</h3>
                                            <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i>تهران، زعفرانیه، خیابان صدف، مجتمع نیلوفر شرقی</div>
                                        </div>
                                    </div>
                                </div></a></div>
                        <div class="col-md-5"><a class="card border-0 overflow-hidden mb-sm-4 mb-3 text-decoration-none text-light" href="real-estate-single-v1-v2.html">
                                <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/02.jpg" alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                                    <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                                        <div class="fs-sm text-uppercase pt-2 mb-1">اجاره</div>
                                        <h3 class="h5 text-light mb-1">آپارتمان مدرن استخردار</h3>
                                        <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i>مشهد، خیابان سجاد، کوچه اقاقیا طبقه 8</div>
                                    </div>
                                </div></a><a class="card border-0 overflow-hidden text-decoration-none text-light" href="real-estate-single-v1-v2.html">
                                <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/03.jpg" alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                                    <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                                        <div class="fs-sm text-uppercase pt-2 mb-1">فروش</div>
                                        <h3 class="h5 text-light mb-1">خانه دوبلکس</h3>
                                        <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i>تهران، الهیه، نبش خیابان کاج غربی</div>
                                    </div>
                                </div></a></div>
                    </div>
                </div>
                <!-- Carousel item-->
                <div class="col">
                    <div class="row gy-md-0 gy-sm-4 gy-3 gx-sm-4 gx-0">
                        <div class="col-md-7"><a class="text-decoration-none text-light card bg-size-cover bg-position-center border-0 overflow-hidden h-100" href="real-estate-single-v1-v1.html" style="background-image: url(img/real-estate/top-properties/04.jpg); min-height: 18.75rem;"><span class="img-gradient-overlay"></span>
                                <div class="card-body content-overlay pb-0"></div>
                                <div class="card-footer content-overlay border-0 pt-0 pb-4">
                                    <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5">
                                        <div class="pe-2">
                                            <div class="fs-sm text-uppercase pt-2 mb-1">اجاره</div>
                                            <h3 class="h5 text-light mb-1">آپارتمان 2 خوابه</h3>
                                            <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i>بزرگراه نواب، خیابان صفدری، خیابان محبوب مجاز شرقی</div>
                                        </div>
                                    </div>
                                </div></a></div>
                        <div class="col-md-5"><a class="card border-0 overflow-hidden mb-sm-4 mb-3 text-decoration-none text-light" href="real-estate-single-v1-v2.html">
                                <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/05.jpg" alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                                    <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                                        <div class="fs-sm text-uppercase pt-2 mb-1">فروش</div>
                                        <h3 class="h5 text-light mb-1">خانه حیاط دار</h3>
                                        <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i>سیدخندان، 100متر بالاتر از مترو شریعتی</div>
                                    </div>
                                </div></a><a class="card border-0 overflow-hidden text-decoration-none text-light" href="real-estate-single-v1-v2.html">
                                <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/06.jpg" alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                                    <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                                        <div class="fs-sm text-uppercase pt-2 mb-1">فروش</div>
                                        <h3 class="h5 text-light mb-1">ویلا 2 طبقه | 150 متر مربع</h3>
                                        <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i>شمال، خیابان شادمان بن بست شکوفه</div>
                                    </div>
                                </div></a></div>
                    </div>
                </div>
                <!-- Carousel item-->
                <div class="col">
                    <div class="row gy-md-0 gy-sm-4 gy-3 gx-sm-4 gx-0">
                        <div class="col-md-7"><a class="text-decoration-none text-light card bg-size-cover bg-position-center border-0 overflow-hidden h-100" href="real-estate-single-v1-v1.html" style="background-image: url(img/real-estate/top-properties/07.jpg); min-height: 18.75rem;"><span class="img-gradient-overlay"></span>
                                <div class="card-body content-overlay pb-0"></div>
                                <div class="card-footer content-overlay border-0 pt-0 pb-4">
                                    <div class="d-sm-flex justify-content-between align-items-end pt-5 mt-2 mt-sm-5">
                                        <div class="pe-2">
                                            <div class="fs-sm text-uppercase pt-2 mb-1">فروش</div>
                                            <h3 class="h5 text-light mb-1">ویلا 2 طبقه | 150 متر مربع</h3>
                                            <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i>شمال، خیابان شادمان بن بست شکوفه</div>
                                        </div>
                                    </div>
                                </div></a></div>
                        <div class="col-md-5"><a class="card border-0 overflow-hidden mb-sm-4 mb-3 text-decoration-none text-light" href="real-estate-single-v1-v2.html">
                                <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/08.jpg" alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                                    <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                                        <div class="fs-sm text-uppercase pt-2 mb-1">فروش</div>
                                        <h3 class="h5 text-light mb-1">خانه حیاط دار</h3>
                                        <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i>سیدخندان، 100متر بالاتر از مترو شریعتی</div>
                                    </div>
                                </div></a><a class="card border-0 overflow-hidden text-decoration-none text-light" href="real-estate-single-v1-v2.html">
                                <div class="card-body p-0 position-relative"><img src="img/real-estate/top-properties/09.jpg" alt="Article image"><span class="img-gradient-overlay zindex-1"></span>
                                    <div class="position-absolute start-0 bottom-0 m-n1 p-4 zindex-5">
                                        <div class="fs-sm text-uppercase pt-2 mb-1">اجاره</div>
                                        <h3 class="h5 text-light mb-1">آپارتمان 2 خوابه</h3>
                                        <div class="fs-sm opacity-70"><i class="fi-map-pin ms-1"></i>بزرگراه نواب، خیابان صفدری، خیابان محبوب مجاز شرقی</div>
                                    </div>
                                </div></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel custom controls-->
        <div class="tns-carousel-controls justify-content-center pt-md-2 mt-4" id="carousel-controls-tp">
            <button class="me-3" type="button"><i class="fi-chevron-left fs-xs"></i></button>
            <button type="button"><i class="fi-chevron-right fs-xs"></i></button>
        </div>
    </section>
    <!-- Find your agent-->
    <section class="container mb-5 pb-lg-5 pb-md-4">
        <div class="card py-lg-5 py-4 border-0 bg-secondary">
            <div class="card-body p-4 text-center">
                <h2 class="">مشاوران املاک</h2>
                <p class="mx-auto mb-md-5 mb-4 pb-lg-3" style="max-width: 53.125rem;">ما جامع ترین دایرکتوری مشاورین املاک را داریم تا به شما در رفع تمام نیازهای املاکتان کمک کنیم. چه خرید، فروش یا اجاره، جستجوی خود را برای یافتن تخصص محلی مناسب شروع کنید.</p>
                <!-- Agent ava's-->
                <div class="d-flex align-items-center justify-content-center flex-wrap mb-md-5 mb-4 pb-lg-3 ps-3 pt-4">
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/39.jpg" width="110" alt="Avatar"></div>
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/40.jpg" width="110" alt="Avatar"></div>
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/41.jpg" width="110" alt="Avatar"></div>
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/42.jpg" width="110" alt="Avatar"></div>
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/43.jpg" width="110" alt="Avatar"></div>
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/44.jpg" width="110" alt="Avatar"></div>
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/45.jpg" width="110" alt="Avatar"></div>
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/46.jpg" width="110" alt="Avatar"></div>
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/47.jpg" width="110" alt="Avatar"></div>
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/48.jpg" width="110" alt="Avatar"></div>
                    <div class="border border-5 border-white rounded-circle bg-white ms-n3 mt-n4"><img class="rounded-circle" src="img/avatars/49.jpg" width="110" alt="Avatar"></div>
                </div><a class="btn btn-lg btn-primary w-sm-auto w-100" href="#">یافتن مشاوره ملک<i class="fi-chevron-right ms-2"></i></a>
            </div>
        </div>
    </section>
    <!-- Blog-->
    <section class="container mb-5 pb-lg-5 pb-4">
        <h2 class="h3 mb-4 pb-2 text-md-start text-center  ">آخرین مقالات املاک</h2>
        <div class="row gy-5">
            <div class="col-lg-7">
                <!-- Post-->
                <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="#" style="background-image: url(img/real-estate/blog/05.jpg);"></a>
                    <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none" href="real-estate-blog-single.html">سبک زندگی</a>
                        <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="real-estate-blog-single.html">5 پروژه جاه طلبانه آسان برای بهبود خانه شما</a></h3>
                        <p class="fs-sm text-muted">ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای... </p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/10.jpg" width="44" alt="Avatar">
                            <div class="pe-2">
                                <h6 class="fs-sm text-nav lh-base mb-1">آنت بلک</h6>
                                <div class="d-flex text-body fs-xs"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 ms-1"></i>1 اردیبهشت</span><span><i class="fi-chat-circle opacity-70 ms-1"></i>1 دیدگاه</span></div>
                            </div></a>
                    </div>
                </article>
                <!-- Post-->
                <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="real-estate-blog-single.html" style="background-image: url(img/real-estate/blog/06.jpg);"></a>
                    <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none" href="#">نکات و ترفندها</a>
                        <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="real-estate-blog-single.html">7 نکته برای دستیابی به حداکثر آرامش</a></h3>
                        <p class="fs-sm text-muted">متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو ...</p><a class="d-flex align-items-center text-decoration-none" href="#"><img class="rounded-circle" src="img/avatars/08.jpg" width="44" alt="Avatar">
                            <div class="pe-2">
                                <h6 class="fs-sm text-nav lh-base mb-1">الهام کریمی</h6>
                                <div class="d-flex text-body fs-xs"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 ms-1"></i>27 تیر</span><span><i class="fi-chat-circle opacity-70 ms-1"></i>3 دیدگاه</span></div>
                            </div></a>
                    </div>
                </article>
                <div class="pt-2"><a class="btn btn-lg btn-outline-primary w-sm-auto w-100" href="real-estate-blog.html">مقالات بیشتر</a></div>
            </div>
            <div class="col-1 d-lg-block d-none">
                <hr class="hr-vertical mx-auto">
            </div>
            <div class="col-lg-4">
                <div class="row row-cols-lg-1 row-cols-md-2 row-cols-1 gy-5 text-md-start text-center">
                    <!-- Mail subscription-->
                    <div class="col pb-lg-2">
                        <h3 class="h5">عضویت در خبرنامه</h3>
                        <p class="mb-4">برای دریافت آخرین اخبار و به روز رسانی های ما ایمیل خود را وارد کنید.</p>
                        <form class="form-group mx-auto" style="max-width: 26rem;">
                            <div class="input-group"><span class="input-group-text text-muted"><i class="fi-mail"></i></span>
                                <input class="form-control" type="email" placeholder="ایمیل شما">
                            </div>
                            <button class="btn btn-primary" type="button">ثبت نام</button>
                        </form>
                    </div>
                    <!-- Following-->
                    <div class="col">
                        <h3 class="h5">ما را نبال کنید</h3>
                        <p class="mb-4">آخرین اخبار در مورد بازار مسکن را با عضویت در سایت دریافت کنید.</p>
                        <div class="ms-n2 mt-n2"><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mt-2" href="#"><i class="fi-instagram"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mt-2" href="#"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mt-2" href="#"><i class="fi-whatsapp"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mt-2" href="#"><i class="fi-telegram"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Links-->
    <section class="container mb-5 pb-lg-5">
        <div class="row row-cols-md-3 row-cols-1 gy-3">
            <!-- Calculate property cost-->
            <div class="col">
                <div class="card card-hover h-100 border-0 bg-faded-warning position-relative">
                    <div class="card-body pb-2">
                        <h5 class="mb-2 pb-1 ">محاسبه ارزش ملک</h5>
                        <p class="mb-0">ما می توانیم اجاره تقریبی شما را محاسبه کنیم.</p>
                    </div>
                    <div class="card-footer py-1 border-0"><a class="stretched-link btn btn-link mb-3 px-0 text-warning" href="#cost-calculator" data-bs-toggle="modal">محاسبه</a></div>
                </div>
            </div>
            <!-- Help center link-->
            <div class="col">
                <div class="card card-hover h-100 border-0 bg-faded-accent position-relative">
                    <div class="card-body pb-2">
                        <h5 class="mb-2 pb-1 ">دیدن از مرکز پشتیبانی</h5>
                        <p class="mb-0">در اینجا می توانید سوالات متداول را پیدا کنید.</p>
                    </div>
                    <div class="card-footer py-1 border-0"><a class="stretched-link btn btn-link mb-3 px-0 text-accent" href="real-estate-help-center.html">بیشتر بخوانید</a></div>
                </div>
            </div>
            <!-- How it works link-->
            <div class="col">
                <div class="card card-hover h-100 border-0 bg-faded-success position-relative">
                    <div class="card-body pb-2">
                        <h5 class="mb-2 pb-1 ">آشنایی با نحوه فعالیت</h5>
                        <p class="mb-0">در اینجا یک راهنمای گام به گام برای اجاره کنندگان است.</p>
                    </div>
                    <div class="card-footer py-1 border-0"><a class="stretched-link btn btn-link mb-3 px-0 text-success" href="real-estate-about.html">شروع کنید</a></div>
                </div>
            </div>
        </div>
    </section>
@endsection
