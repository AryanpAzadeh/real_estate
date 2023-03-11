@extends('layouts.master')

@section('content')



    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero_banner" style="background:url(assets/img/banner-1.png) no-repeat;" data-overlay="0">
        <div class="container">

            <h1 class="big-header-capt mb-0">خانه جدید خود را پیدا کنید</h1>
            <p class="text-center mb-4">ملک جدید و برجسته واقع در شهر محلی خود را پیدا کنید.</p>
            <!-- Type -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-11 col-md-12">
                    <div class="full_search_box nexio_search lightanic_search hero_search-radius modern">
                        <div class="search_hero_wrapping">

                            <div class="row">
                                <div class="col-lg-4 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>شهر/استان</label>
                                        <div class="input-with-icon">
                                            <select id="location" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">تهران</option>
                                                <option value="2">کرج</option>
                                                <option value="3">تبریز</option>
                                                <option value="4">اصفهان</option>
                                                <option value="5">رشت</option>
                                                <option value="6">زنجان</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    <div class="form-group">
                                        <label>نوع ملک</label>
                                        <div class="input-with-icon">
                                            <select id="ptypes" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">همه دسته ها</option>
                                                <option value="2">آپارتمان</option>
                                                <option value="3">ویلا</option>
                                                <option value="4">تجاری</option>
                                                <option value="5">دفتر</option>
                                                <option value="6">پارکینگ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group none">
                                        <label>قیمت</label>
                                        <div class="input-with-icon">
                                            <select id="price" class="form-control">
                                                <option value="">&nbsp;</option>
                                                <option value="1">از 40,000 تا 10m</option>
                                                <option value="2">از 60,000 تا 20m</option>
                                                <option value="3">از 70,000 تا 30m</option>
                                                <option value="3">از 80,000 تا 40m</option>
                                                <option value="3">از 90,000 تا 50m</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-1 col-md-2 col-sm-12 small-padd">
                                    <div class="form-group none">
                                        <a href="#" class="btn search-btn"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Hero Banner End ================================== -->

    <!-- ============================ Our Awards Start ================================== -->
    <section class="p-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-12">

                    <div class="_awards_group">
                        <ul class="_awards_lists">
                            <!-- single list -->
                            <li>
                                <div class="_awards_list_wrap">
                                    <div class="_awards_list_thumb"><img src="assets/img/award-1.png" class="img-fluid" alt="" /></div>
                                    <div class="_awards_list_caption">
                                        <h5 class="theme-cl">1400</h5>
                                        <span>جوایز سالانه</span>
                                    </div>
                                </div>
                            </li>
                            <!-- single list -->
                            <li>
                                <div class="_awards_list_wrap">
                                    <div class="_awards_list_thumb"><img src="assets/img/award-5.png" class="img-fluid" alt="" /></div>
                                    <div class="_awards_list_caption">
                                        <h5 class="theme-cl-2">1398</h5>
                                        <span>جایزه ویژه املاک</span>
                                    </div>
                                </div>
                            </li>
                            <!-- single list -->
                            <li>
                                <div class="_awards_list_wrap">
                                    <div class="_awards_list_thumb"><img src="assets/img/award-2.png" class="img-fluid" alt="" /></div>
                                    <div class="_awards_list_caption">
                                        <h5 class="text-warning">1399</h5>
                                        <span>جایزه سالانه ملک</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Our Awards End ================================== -->

    <!-- ============================ Property Category Start ================================== -->
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>دسته بندی خود را انتخاب کنید</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">

                <!-- Single Category -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="assets/img/f-1.png" class="img-fluid hover" alt="" />
                                    <img src="assets/img/f-11.png" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>دفتر و استودیو</h5>
                                    <span>22 ملک</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Category -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="assets/img/f-2.png" class="img-fluid hover" alt="" />
                                    <img src="assets/img/f-22.png" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>صنعتی</h5>
                                    <span>22 ملک</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Category -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="assets/img/f-3.png" class="img-fluid hover" alt="" />
                                    <img src="assets/img/f-33.png" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>ساختمان</h5>
                                    <span>85 ملک</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Category -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="assets/img/f-4.png" class="img-fluid hover" alt="" />
                                    <img src="assets/img/f-44.png" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>تجاری</h5>
                                    <span>79 ملک</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Category -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="assets/img/f-5.png" class="img-fluid hover" alt="" />
                                    <img src="assets/img/f-55.png" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>خانه و ویلا</h5>
                                    <span>22 ملک</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Category -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="assets/img/f-6.png" class="img-fluid hover" alt="" />
                                    <img src="assets/img/f-66.png" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>پارکینگ</h5>
                                    <span>22 ملک</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Category -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="assets/img/f-7.png" class="img-fluid hover" alt="" />
                                    <img src="assets/img/f-77.png" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>دفتر و استودیو</h5>
                                    <span>72 ملک</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Single Category -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="_category_box">
                        <a href="list-layout-with-sidebar.html">
                            <div class="_category_elio">
                                <div class="_category_thumb">
                                    <img src="assets/img/f-8.png" class="img-fluid hover" alt="" />
                                    <img src="assets/img/f-88.png" class="img-fluid simple" alt="" />
                                </div>
                                <div class="_category_caption">
                                    <h5>آپارتمان</h5>
                                    <span>102 ملک</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Property Category End ================================== -->

    <!-- ============================ Properties Start ================================== -->
    <section class="pt-0 min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>املاک تبلیغ شده ویژه</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Property -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="property-listing property-2">

                        <div class="listing-img-wrapper">
                            <div class="_exlio_125">برای اجاره</div>
                            <div class="list-img-slide">
                                <div class="click">
                                    <div><a href="single-property-1.html"><img src="assets/img/p-1.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="single-property-1.html"><img src="assets/img/p-2.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="single-property-1.html"><img src="assets/img/p-3.png" class="img-fluid mx-auto" alt="" /></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-wrapper">
                            <div class="listing-short-detail-wrap">
                                <div class="_card_list_flex mb-2">
                                    <div class="_card_flex_01">
                                        <span class="_list_blickes _netork">4 شبکه</span>
                                        <span class="_list_blickes types">آپارتمان</span>
                                    </div>
                                    <div class="_card_flex_last">
                                        <h6 class="listing-card-info-price mb-0">670 میلیون</h6>
                                    </div>
                                </div>
                                <div class="_card_list_flex">
                                    <div class="_card_flex_01">
                                        <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="price-features-wrapper">
                            <div class="list-fx-features">
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>4 تخته
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 حمام
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>820 متر مربع
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-footer">
                            <div class="footer-first">
                                <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />مونترال ، کانادا</div>
                            </div>
                            <div class="footer-flex">
                                <ul class="selio_style">
                                    <li>
                                        <div class="prt_saveed_12lk">
                                            <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="ذخیره"><input type="checkbox"><i class="ti-heart"></i></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prt_saveed_12lk">
                                            <a href="compare-property.html" data-toggle="tooltip" data-placement="top" data-original-title="مقایسه"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prt_saveed_12lk">
                                            <a href="single-property-1.html" data-toggle="tooltip" data-placement="top" data-original-title="مشاهده"><i class="ti-arrow-left"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="property-listing property-2">

                        <div class="listing-img-wrapper">
                            <div class="_exlio_125">برای فروش</div>
                            <div class="list-img-slide">
                                <div class="click">
                                    <div><a href="single-property-1.html"><img src="assets/img/p-4.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="single-property-1.html"><img src="assets/img/p-5.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="single-property-1.html"><img src="assets/img/p-6.png" class="img-fluid mx-auto" alt="" /></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-wrapper">
                            <div class="listing-short-detail-wrap">
                                <div class="_card_list_flex mb-2">
                                    <div class="_card_flex_01">
                                        <span class="_list_blickes _netork">5 شبکه</span>
                                        <span class="_list_blickes types">آپارتمان</span>
                                    </div>
                                    <div class="_card_flex_last">
                                        <h6 class="listing-card-info-price mb-0">690 میلیون</h6>
                                    </div>
                                </div>
                                <div class="_card_list_flex">
                                    <div class="_card_flex_01">
                                        <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="price-features-wrapper">
                            <div class="list-fx-features">
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>4 تخته
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 حمام
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>700 متر مربع
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-footer">
                            <div class="footer-first">
                                <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />مونترال ، کانادا</div>
                            </div>
                            <div class="footer-flex">
                                <ul class="selio_style">
                                    <li>
                                        <div class="prt_saveed_12lk">
                                            <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="ذخیره"><input type="checkbox"><i class="ti-heart"></i></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prt_saveed_12lk">
                                            <a href="compare-property.html" data-toggle="tooltip" data-placement="top" data-original-title="مقایسه"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prt_saveed_12lk">
                                            <a href="single-property-1.html" data-toggle="tooltip" data-placement="top" data-original-title="مشاهده"><i class="ti-arrow-left"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Property -->

                <!-- Single Property -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="property-listing property-2">

                        <div class="listing-img-wrapper">
                            <div class="_exlio_125">برای اجاره</div>
                            <div class="list-img-slide">
                                <div class="click">
                                    <div><a href="single-property-1.html"><img src="assets/img/p-7.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="single-property-1.html"><img src="assets/img/p-8.png" class="img-fluid mx-auto" alt="" /></a></div>
                                    <div><a href="single-property-1.html"><img src="assets/img/p-9.png" class="img-fluid mx-auto" alt="" /></a></div>
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-wrapper">
                            <div class="listing-short-detail-wrap">
                                <div class="_card_list_flex mb-2">
                                    <div class="_card_flex_01">
                                        <span class="_list_blickes _netork">4 شبکه</span>
                                        <span class="_list_blickes types">ویلایی</span>
                                    </div>
                                    <div class="_card_flex_last">
                                        <h6 class="listing-card-info-price mb-0">850 میلیون</h6>
                                    </div>
                                </div>
                                <div class="_card_list_flex">
                                    <div class="_card_flex_01">
                                        <h4 class="listing-name verified"><a href="single-property-1.html" class="prt-link-detail">سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="price-features-wrapper">
                            <div class="list-fx-features">
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="assets/img/bed.svg" width="13" alt="" /></div>3 تخته
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="assets/img/bathtub.svg" width="13" alt="" /></div>2 حمام
                                </div>
                                <div class="listing-card-info-icon">
                                    <div class="inc-fleat-icon"><img src="assets/img/move.svg" width="13" alt="" /></div>800 متر مربع
                                </div>
                            </div>
                        </div>

                        <div class="listing-detail-footer">
                            <div class="footer-first">
                                <div class="foot-location"><img src="assets/img/pin.svg" width="18" alt="" />مونترال ، کانادا</div>
                            </div>
                            <div class="footer-flex">
                                <ul class="selio_style">
                                    <li>
                                        <div class="prt_saveed_12lk">
                                            <label class="toggler toggler-danger" data-toggle="tooltip" data-placement="top" data-original-title="ذخیره"><input type="checkbox"><i class="ti-heart"></i></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prt_saveed_12lk">
                                            <a href="compare-property.html" data-toggle="tooltip" data-placement="top" data-original-title="مقایسه"><i class="ti-control-shuffle"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="prt_saveed_12lk">
                                            <a href="single-property-1.html" data-toggle="tooltip" data-placement="top" data-original-title="مشاهده"><i class="ti-arrow-left"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End Single Property -->
            </div>

        </div>
    </section>
    <!-- ============================ Properties End ================================== -->

    <!-- ============================ Top Agents ================================== -->
    <section class="image-cover min" style="background:#122947 url(assets/img/pattern.png) no-repeat;">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center light">
                        <h2>مشاوران برجسته ما</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="item-slide space">

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="grid_agents">
                                <div class="elio_mx_list theme-bg-2">102 ملک</div>
                                <div class="grid_agents-wrap">

                                    <div class="fr-grid-thumb">
                                        <a href="agent-page.html">
                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                            <img src="assets/img/team-1.jpg" class="img-fluid mx-auto" alt="">
                                        </a>
                                    </div>

                                    <div class="fr-grid-deatil">
                                        <span><i class="ti-location-pin ml-1"></i>ایران ، اصفهان</span>
                                        <h5 class="fr-can-name"><a href="agent-page.html">مهدی رمضانی</a></h5>
                                        <ul class="inline_social">
                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="fr-infos-deatil">
                                        <a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope ml-2"></i>ارسال پیام</a>
                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="grid_agents">
                                <div class="elio_mx_list theme-bg-2">72 ملک</div>
                                <div class="grid_agents-wrap">

                                    <div class="fr-grid-thumb">
                                        <a href="agent-page.html">
                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                            <img src="assets/img/team-2.jpg" class="img-fluid mx-auto" alt="">
                                        </a>
                                    </div>

                                    <div class="fr-grid-deatil">
                                        <span><i class="ti-location-pin ml-1"></i>ایران ، اصفهان</span>
                                        <h5 class="fr-can-name"><a href="agent-page.html">لیلا یوسفی</a></h5>
                                        <ul class="inline_social">
                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="fr-infos-deatil">
                                        <a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope ml-2"></i>ارسال پیام</a>
                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="grid_agents">
                                <div class="elio_mx_list theme-bg-2">22 ملک</div>
                                <div class="grid_agents-wrap">

                                    <div class="fr-grid-thumb">
                                        <a href="agent-page.html">
                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                            <img src="assets/img/team-3.jpg" class="img-fluid mx-auto" alt="">
                                        </a>
                                    </div>

                                    <div class="fr-grid-deatil">
                                        <span><i class="ti-location-pin ml-1"></i>ایران ، اصفهان</span>
                                        <h5 class="fr-can-name"><a href="agent-page.html">بهمن رضایی</a></h5>
                                        <ul class="inline_social">
                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="fr-infos-deatil">
                                        <a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope ml-2"></i>ارسال پیام</a>
                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="grid_agents">
                                <div class="elio_mx_list theme-bg-2">50 ملک</div>
                                <div class="grid_agents-wrap">

                                    <div class="fr-grid-thumb">
                                        <a href="agent-page.html">
                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                            <img src="assets/img/team-4.jpg" class="img-fluid mx-auto" alt="">
                                        </a>
                                    </div>

                                    <div class="fr-grid-deatil">
                                        <span><i class="ti-location-pin ml-1"></i>ایران ، اصفهان</span>
                                        <h5 class="fr-can-name"><a href="agent-page.html">مریم معصومی</a></h5>
                                        <ul class="inline_social">
                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="fr-infos-deatil">
                                        <a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope ml-2"></i>ارسال پیام</a>
                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="grid_agents">
                                <div class="elio_mx_list theme-bg-2">42 ملک</div>
                                <div class="grid_agents-wrap">

                                    <div class="fr-grid-thumb">
                                        <a href="agent-page.html">
                                            <span class="verified"><img src="assets/img/verified.svg" class="verify mx-auto" alt=""></span>
                                            <img src="assets/img/team-5.jpg" class="img-fluid mx-auto" alt="">
                                        </a>
                                    </div>

                                    <div class="fr-grid-deatil">
                                        <span><i class="ti-location-pin ml-1"></i>ایران ، اصفهان</span>
                                        <h5 class="fr-can-name"><a href="agent-page.html">محمود قلی زاده</a></h5>
                                        <ul class="inline_social">
                                            <li><a href="#" class="fb"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#" class="ln"><i class="ti-linkedin"></i></a></li>
                                            <li><a href="#" class="ins"><i class="ti-instagram"></i></a></li>
                                            <li><a href="#" class="tw"><i class="ti-twitter"></i></a></li>
                                        </ul>
                                    </div>

                                    <div class="fr-infos-deatil">
                                        <a href="#"  data-toggle="modal" data-target="#autho-message" class="btn agent-btn theme-bg"><i class="fa fa-envelope ml-2"></i>ارسال پیام</a>
                                        <a href="#" class="btn agent-btn theme-black"><i class="fa fa-phone"></i></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Top Agents End ================================== -->

    <!-- ============================ Property By Location ================================== -->
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>برترین مکان های ملکی</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="grid-layout-with-sidebar.html" class="img-wrap">
                        <div class="location_wrap_content visible">
                            <div class="location_wrap_content_first">
                                <h4>رشت</h4>
                                <span>48 ملک</span>
                            </div>
                            <div class="location_btn"><i class="fa fa-arrow-left"></i></div>
                        </div>
                        <div class="img-wrap-background" style="background-image: url(assets/img/city-6.png);"></div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="grid-layout-with-sidebar.html" class="img-wrap">
                        <div class="location_wrap_content visible">
                            <div class="location_wrap_content_first">
                                <h4>ایران , تهران</h4>
                                <span>73 ملک</span>
                            </div>
                            <div class="location_btn"><i class="fa fa-arrow-left"></i></div>
                        </div>
                        <div class="img-wrap-background" style="background-image: url(assets/img/city-7.png);"></div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a href="grid-layout-with-sidebar.html" class="img-wrap">
                        <div class="location_wrap_content visible">
                            <div class="location_wrap_content_first">
                                <h4>ایران , کرج</h4>
                                <span>40 ملک</span>
                            </div>
                            <div class="location_btn"><i class="fa fa-arrow-left"></i></div>
                        </div>
                        <div class="img-wrap-background" style="background-image: url(assets/img/city-3.png);"></div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="grid-layout-with-sidebar.html" class="img-wrap">
                        <div class="location_wrap_content visible">
                            <div class="location_wrap_content_first">
                                <h4>تبریز</h4>
                                <span>35 ملک</span>
                            </div>
                            <div class="location_btn"><i class="fa fa-arrow-left"></i></div>
                        </div>
                        <div class="img-wrap-background" style="background-image: url(assets/img/city-4.png);"></div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="grid-layout-with-sidebar.html" class="img-wrap">
                        <div class="location_wrap_content visible">
                            <div class="location_wrap_content_first">
                                <h4>تهران, کرج</h4>
                                <span>10 ملک</span>
                            </div>
                            <div class="location_btn"><i class="fa fa-arrow-left"></i></div>
                        </div>
                        <div class="img-wrap-background" style="background-image: url(assets/img/city-5.png);"></div>
                    </a>
                </div>

            </div>

        </div>
    </section>
    <!-- ============================ Property By Location End ================================== -->

    <!-- ============================ Smart Testimonials ================================== -->
    <section class="gray-simple">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>نظرات خوب توسط مشتریان</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="item-slide space">

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="_testimonial_wrios">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="assets/img/user-1.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>مهدی رمضانی</h5>
                                            <div class="_ovr_posts"><span>مدیر عامل</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7</div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="assets/img/c-1.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="facts-detail">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="_testimonial_wrios">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="assets/img/user-2.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>مریم معصومی</h5>
                                            <div class="_ovr_posts"><span>مدیرعامل اپل</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.5</div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="assets/img/c-2.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="facts-detail">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="_testimonial_wrios">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="assets/img/user-3.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>محمود قلی زاده</h5>
                                            <div class="_ovr_posts"><span>مدیرعامل گوگل</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.9</div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="assets/img/c-3.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="facts-detail">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="_testimonial_wrios">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="assets/img/user-4.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>لیلا یوسفی</h5>
                                            <div class="_ovr_posts"><span>مدیر لینکدین</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7</div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="assets/img/c-4.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="facts-detail">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Item -->
                        <div class="single_items">
                            <div class="_testimonial_wrios">
                                <div class="_testimonial_flex">
                                    <div class="_testimonial_flex_first">
                                        <div class="_tsl_flex_thumb">
                                            <img src="assets/img/user-5.jpg" class="img-fluid" alt="">
                                        </div>
                                        <div class="_tsl_flex_capst">
                                            <h5>اکبر مهتابی</h5>
                                            <div class="_ovr_posts"><span>مدیر عامل</span></div>
                                            <div class="_ovr_rates"><span><i class="fa fa-star"></i></span>4.7</div>
                                        </div>
                                    </div>
                                    <div class="_testimonial_flex_first_last">
                                        <div class="_tsl_flex_thumb">
                                            <img src="assets/img/c-5.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                                <div class="facts-detail">
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ============================ Smart Testimonials End ================================== -->

    <!-- ============================ article Start ================================== -->
    <section class="min">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="sec-heading center">
                        <h2>آخرین اخبار و مقالات</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="grid_blog_box">

                        <div class="gtid_blog_thumb">
                            <a href="blog-detail.html"><img src="assets/img/b-1.jpg" class="img-fluid" alt="" /></a>
                            <div class="gtid_blog_info"><span>12</span>اسفند 1400</div>
                        </div>

                        <div class="blog-body">
                            <h4 class="bl-title"><a href="blog-detail.html">طرح های خلاقانه</a><span class="latest_new_post">جدید</span></h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان. </p>
                        </div>

                        <div class="modern_property_footer">
                            <div class="property-author">
                                <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="assets/img/user-1.jpg" class="img-fluid" alt=""></a></div>
                                <h5><a href="agent-page.html" tabindex="-1">بهمن رمضانی</a></h5>
                            </div>
                            <span class="article-pulish-date"><i class="ti-comment-alt ml-2"></i>202</span>
                        </div>

                    </div>
                </div>

                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="grid_blog_box">

                        <div class="gtid_blog_thumb">
                            <a href="blog-detail.html"><img src="assets/img/b-5.jpg" class="img-fluid" alt="" /></a>
                            <div class="gtid_blog_info"><span>15</span>خرداد 1400</div>
                        </div>

                        <div class="blog-body">
                            <h4 class="bl-title"><a href="blog-detail.html">توسعه دهنده UX/UI</a><span class="latest_new_post hot">ویژه</span></h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان. </p>
                        </div>

                        <div class="modern_property_footer">
                            <div class="property-author">
                                <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="assets/img/user-2.jpg" class="img-fluid" alt=""></a></div>
                                <h5><a href="agent-page.html" tabindex="-1">الناز روستایی</a></h5>
                            </div>
                            <span class="article-pulish-date"><i class="ti-comment-alt ml-2"></i>407</span>
                        </div>

                    </div>
                </div>

                <!-- Single blog Grid -->
                <div class="col-lg-4 col-md-6">
                    <div class="grid_blog_box">

                        <div class="gtid_blog_thumb">
                            <a href="blog-detail.html"><img src="assets/img/b-6.jpg" class="img-fluid" alt="" /></a>
                            <div class="gtid_blog_info"><span>27</span>فروردین 1400</div>
                        </div>

                        <div class="blog-body">
                            <h4 class="bl-title"><a href="blog-detail.html">توسعه دهنده وردپرس</a><span class="latest_new_post">جدید</span></h4>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان. </p>
                        </div>

                        <div class="modern_property_footer">
                            <div class="property-author">
                                <div class="path-img"><a href="agent-page.html" tabindex="-1"><img src="assets/img/user-3.jpg" class="img-fluid" alt=""></a></div>
                                <h5><a href="agent-page.html" tabindex="-1">سعید شمس</a></h5>
                            </div>
                            <span class="article-pulish-date"><i class="ti-comment-alt ml-2"></i>410</span>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ article End ================================== -->

    <!-- ============================ Call To Action ================================== -->
    <section class="theme-bg call_action_wrap-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="call_action_wrap">
                        <div class="call_action_wrap-head">
                            <h3>آیا سوالی دارید؟</h3>
                            <span>ما به شما کمک می کنیم تا شغل و پیشرفت خود را افزایش دهید.</span>
                        </div>
                        <a href="#" class="btn btn-call_action_wrap">امروز با ما تماس بگیرید</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
