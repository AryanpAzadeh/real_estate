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
            </div>
        </div>
    </section>
    <!-- Category-->
    <section class="container mb-5">
        <div class="row row-cols-lg-6 row-cols-sm-3 row-cols-2 g-3 g-xl-4">
            @foreach(\App\Models\Type::all() as $type)
                <div class="col"><a class="icon-box card card-body h-100 border-0 shadow-sm card-hover h-100 text-center" href="#">
                        <div class="icon-box-media bg-faded-primary text-primary rounded-circle mb-3 mx-auto"><i class="fi-real-estate-house"></i></div>
                        <h3 class="icon-box-title fs-base mb-0">{{$type->name}}</h3></a></div>

            @endforeach
        </div>
    </section>
    <!-- Top properties-->
    <section class="container mb-5 pb-md-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h2 class="h3 mb-0 ">خانه های ویژه ما</h2><a class="btn btn-link fw-normal p-0" href="{{route('pages.estate')}}">مشاهده همه <i class="fi-arrow-long-left ms-2"></i></a>
        </div>
        <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2" dir="ltr">
            <div class="tns-carousel-inner row gx-4 mx-0 pt-3 pb-4" data-carousel-options="{&quot;items&quot;: 4, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4}}}">
                <!-- Item-->
                @foreach($estates as $estate)
                    <div class="col">
                        <div class="card shadow-sm card-hover border-0 h-100">
                            <div class="card-img-top card-img-hover"><a class="img-overlay" href="{{route('pages.single_estate' , $estate->code)}}"></a>
                                <img src="{{asset('/storage/estate_images/' . $estate->id .'/' . $estate->images()->first()->image)}}" alt="{{$estate->title}}">
                            </div>
                            <div class="card-body position-relative pb-3">
                                <h4 class="mb-1 fs-sm fw-normal text-uppercase text-primary">{{$estate->category}}</h4>
                                <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="{{route('pages.single_estate' , $estate->code)}}">{{$estate->title}}</a></h3>
                                <div><i class="fi-home mt-n1 ms-2 lead align-middle opacity-70"></i> {{$estate->agency->name}} </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm">{{$estate->bedrooms}}<i class="fi-bed me-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">{{$estate->wc}}<i class="fi-bath me-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">{{$estate->parking}}<i class="fi-car me-1 mt-n1 fs-lg text-muted"></i></span></div>
                        </div>
                    </div>


                @endforeach

            </div>
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
            </div>
            </div>
        </div>
    </section>
    <!-- Blog-->
    <section class="container mb-5 pb-lg-5 pb-4">
        <h2 class="h3 mb-4 pb-2 text-md-start text-center  ">آخرین مقالات املاک</h2>
        <div class="row gy-5">
            <div class="col-lg-7">
                <!-- Post-->
                @foreach(\App\Models\Article::latest()->limit(2)->get() as $article)
                    <article class="card border-0 shadow-sm card-hover card-horizontal mb-4"><a class="card-img-top" href="{{route('pages.single_article' , $article->slug)}}" style="background-image: url('{{asset('/storage/article_images/' . $article->image)}}');"></a>
                        <div class="card-body"><a class="fs-xs text-uppercase text-decoration-none" href="#">{{ $article->category->name}}</a>
                            <h3 class="fs-base pt-1 mb-2"><a class="nav-link" href="{{route('pages.single_article' , $article->slug)}}">{{$article->title}}</a></h3>
                                <div class="pe-2">
                                    <div class="d-flex text-body fs-xs"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 ms-1"></i>{{verta($article->created_at)->format('Y-m-d')}}</span></div>
                                </div>
                        </div>
                    </article>
                @endforeach

                <div class="pt-2"><a class="btn btn-lg btn-outline-primary w-sm-auto w-100" href="{{route('pages.articles')}}">مقالات بیشتر</a></div>
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
                    <div class="card-footer py-1 border-0"><a class="stretched-link btn btn-link mb-3 px-0 text-warning" href="#" data-bs-toggle="modal">محاسبه</a></div>
                </div>
            </div>
            <!-- Help center link-->
            <div class="col">
                <div class="card card-hover h-100 border-0 bg-faded-accent position-relative">
                    <div class="card-body pb-2">
                        <h5 class="mb-2 pb-1 ">دیدن از مرکز پشتیبانی</h5>
                        <p class="mb-0">در اینجا می توانید سوالات متداول را پیدا کنید.</p>
                    </div>
                    <div class="card-footer py-1 border-0"><a class="stretched-link btn btn-link mb-3 px-0 text-accent" href="#">بیشتر بخوانید</a></div>
                </div>
            </div>
            <!-- How it works link-->
            <div class="col">
                <div class="card card-hover h-100 border-0 bg-faded-success position-relative">
                    <div class="card-body pb-2">
                        <h5 class="mb-2 pb-1 ">آشنایی با نحوه فعالیت</h5>
                        <p class="mb-0">در اینجا یک راهنمای گام به گام برای اجاره کنندگان است.</p>
                    </div>
                    <div class="card-footer py-1 border-0"><a class="stretched-link btn btn-link mb-3 px-0 text-success" href="#">شروع کنید</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-5 pb-sm-3 pb-lg-4">
        <div class="bg-secondary rounded-3">
            <div class="col-md-11 col-12 offset-md-1 p-md-0 p-2 d-flex align-items-center justify-content-between">
                <div class="me-md-5 py-md-5 px-md-0 p-4" style="max-width: 526px;">
                    <h2 class="mb-md-4 ">
                        با اطمینان ملک بخرید <br>
                        فروش ملک با بهترین قیمت
                    </h2>
                    <p class="mb-4 pb-md-3 fs-lg">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. </p><a class="btn btn-lg btn-primary" href="{{route('pages.estate')}}"><i class="fi-search me-2"></i>ملک خود را پیدا کن!</a>
                </div>
                <div class="col-4 d-md-block d-none align-self-end px-0"><img class="mt-n5" src="img/real-estate/about/01.png" width="406" alt="Cover image"></div>
            </div>
        </div>
    </section>
@endsection
