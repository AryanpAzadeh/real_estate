@extends('layouts.master')


@section('content')
    <div class="container mt-5 mb-md-4 py-5">
        <div class="row">
            <!-- Page content-->
            <div class="col-lg-8 add-property">
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('pages.index')}}">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ثبت نام آژانس املاک</li>
                    </ol>
                </nav>
                <!-- Title-->
                <div class="mb-4">
                    <h1 class="h2 mb-0">ثبت نام آژانس املاک</h1>
                    <div class="d-lg-none pt-3 mb-2">لطفا اطلاعات را تکمیل نمایید</div>
                    <div class="progress d-lg-none mb-4" style="height: .25rem;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <!-- Basic info-->
                <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                    <h2 class="h5 mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>اطلاعات پایه</h2>
                    <div class="mb-3">
                        <label class="form-label" for="ap-title">نام ملک <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-title" placeholder="نام ملک" value="اقامتگاه ویلایی" required><span class="form-text">48 کاراکتر باقی مانده است </span>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="ap-category">دسته بندی <span class="text-danger">*</span></label>
                            <select class="form-select" id="ap-category" required>
                                <option value="" disabled hidden>انتخاب دسته بندی</option>
                                <option value="Rent">اجاره</option>
                                <option value="Sell">فروش</option>
                            </select>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="ap-type">نوع ملک <span class="text-danger">*</span></label>
                            <select class="form-select" id="ap-type" required>
                                <option value="" disabled hidden>انتخاب نوع ملک</option>
                                <option value="Apartment">آپارتمان</option>
                                <option value="House">خانه</option>
                                <option value="Commercial">اداری</option>
                                <option value="Commercial">سوئیت</option>
                                <option value="New building">آپارتمان نوساز</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-label fw-bold pt-3 pb-2">آیا به عنوان یک شخص حقوقی آگهی ثبت می کنید؟</div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="ap-company" name="ap-business-type">
                        <label class="form-check-label" for="ap-company">ملک تجاری می باشد.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="ap-individual" name="ap-business-type" checked>
                        <label class="form-check-label" for="ap-individual">ملک شخصی می باشد.</label>
                    </div>
                </section>
                <!-- Location-->
                <section class="card card-body border-0 shadow-sm p-4 mb-4" id="location">
                    <h2 class="h5 mb-4"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>موقعیت مکانی</h2>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="ap-country">کشور / استان <span class="text-danger">*</span></label>
                            <select class="form-select" id="ap-country" required>
                                <option value="" disabled>انتخاب کشور</option>
                                <option value="Australia">استرالیا</option>
                                <option value="Belgium">فرانسه</option>
                                <option value="Canada">کانادا</option>
                                <option value="Germany">آلمان</option>
                                <option value="United States" selected>ایالات متحده آمریکا</option>
                            </select>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="ap-city">شهر <span class="text-danger">*</span></label>
                            <select class="form-select" id="ap-city" required>
                                <option value="" disabled>انتخاب شهر</option>
                                <option value="Chicago">شیکاگو</option>
                                <option value="Dallas">دهلی</option>
                                <option value="Los Angeles">لوس آنجلس</option>
                                <option value="New York" selected>نیویورک</option>
                                <option value="San Diego">سن فرانسیسکو</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 mb-3">
                            <label class="form-label" for="ap-district">منطقه <span class="text-danger">*</span></label>
                            <select class="form-select" id="ap-district" required>
                                <option value="" disabled>انتخاب منطقه</option>
                                <option value="Brooklyn">منطقه 1</option>
                                <option value="Manhattan">منطقه 2</option>
                                <option value="Staten Island">منطقه 3</option>
                                <option value="The Bronx">منطقه 4</option>
                                <option value="Queens" selected>منطقه 5</option>
                            </select>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label class="form-label" for="ap-zip">کد پستی  <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="ap-zip" placeholder="Enter Zip code" value="67234" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="ap-address">آدرس <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" id="ap-address" value="خیابان قائم مقام فراهانی پلاک 210" required>
                    </div>
                    <div class="form-label fw-bold pt-3 pb-2">نمایش روی نقشه</div>
                    <div class="interactive-map rounded-3" data-map-options="{&quot;mapLayer&quot;: &quot;https://api.maptiler.com/maps/pastel/{z}/{x}/{y}.png?key=5vRQzd34MMsINEyeKPIs&quot;, &quot;coordinates&quot;: [40.7447, -73.9485], &quot;zoom&quot;: 13, &quot;scrollWheelZoom&quot;: false, &quot;markers&quot;: [{&quot;coordinates&quot;: [40.7447, -73.9485], &quot;className&quot;: &quot;custom-marker-dot&quot;, &quot;popup&quot;: &quot;&lt;div class='p-3'&gt;&lt;h6 class='fs-base'&gt;Pine Apartments&lt;/h6&gt;&lt;p class='fs-xs text-muted pt-1 mt-n3 mb-0'&gt;28 Jackson Ave Long Island City, NY&lt;/p&gt;&lt;/div&gt;&quot;}]}" style="height: 250px;"></div>
                </section>
                <!-- Property details-->
                <section class="card card-body border-0 shadow-sm p-4 mb-4" id="details">
                    <h2 class="h5 mb-4"><i class="fi-edit text-primary fs-5 mt-n1 me-2"></i>جزئیات ملک</h2>
                    <div class="mb-4" style="max-width: 25rem;">
                        <label class="form-label" for="ap-area">مساحت کل بر اساس متر مربع</label>
                        <input class="form-control" type="number" id="ap-area" min="20" placeholder="متراژ را وارد کنید" value="120" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label d-block fw-bold mb-2 pb-1">تعداد اتاق خواب</label>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bedrooms">
                            <input class="btn-check" type="radio" id="studio" name="bedrooms">
                            <label class="btn btn-outline-secondary fw-normal" for="studio">0</label>
                            <input class="btn-check" type="radio" id="bedrooms-1" name="bedrooms">
                            <label class="btn btn-outline-secondary fw-normal" for="bedrooms-1">1</label>
                            <input class="btn-check" type="radio" id="bedrooms-2" name="bedrooms">
                            <label class="btn btn-outline-secondary fw-normal" for="bedrooms-2">2</label>
                            <input class="btn-check" type="radio" id="bedrooms-3" name="bedrooms">
                            <label class="btn btn-outline-secondary fw-normal" for="bedrooms-3">3</label>
                            <input class="btn-check" type="radio" id="bedrooms-4" name="bedrooms" checked>
                            <label class="btn btn-outline-secondary fw-normal" for="bedrooms-4">4</label>
                            <input class="btn-check" type="radio" id="bedrooms-5" name="bedrooms">
                            <label class="btn btn-outline-secondary fw-normal" for="bedrooms-5">5+</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label d-block fw-bold mb-2 pb-1">تعداد سرویس بهداشتی</label>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bathrooms">
                            <input class="btn-check" type="radio" id="bathrooms-1" name="bathrooms">
                            <label class="btn btn-outline-secondary fw-normal" for="bathrooms-1">1</label>
                            <input class="btn-check" type="radio" id="bathrooms-2" name="bathrooms" checked>
                            <label class="btn btn-outline-secondary fw-normal" for="bathrooms-2">2</label>
                            <input class="btn-check" type="radio" id="bathrooms-3" name="bathrooms">
                            <label class="btn btn-outline-secondary fw-normal" for="bathrooms-3">3</label>
                            <input class="btn-check" type="radio" id="bathrooms-4" name="bathrooms">
                            <label class="btn btn-outline-secondary fw-normal" for="bathrooms-4">4</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label d-block fw-bold mb-2 pb-1">تعداد پارکینگ</label>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of parking spots">
                            <input class="btn-check" type="radio" id="parking-1" name="parking">
                            <label class="btn btn-outline-secondary fw-normal" for="parking-1">1</label>
                            <input class="btn-check" type="radio" id="parking-2" name="parking" checked>
                            <label class="btn btn-outline-secondary fw-normal" for="parking-2">2</label>
                            <input class="btn-check" type="radio" id="parking-3" name="parking">
                            <label class="btn btn-outline-secondary fw-normal" for="parking-3">3</label>
                            <input class="btn-check" type="radio" id="parking-4" name="parking">
                            <label class="btn btn-outline-secondary fw-normal" for="parking-4">4</label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label d-block fw-bold mb-2 pb-1">امکانات رفاهی</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="wifi" checked>
                                    <label class="form-check-label" for="wifi">وای فای</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="air-condition" checked>
                                    <label class="form-check-label" for="air-condition">تهویه هوا</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="balcony">
                                    <label class="form-check-label" for="balcony">بالکن</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="garage">
                                    <label class="form-check-label" for="garage">گاراژ</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gym">
                                    <label class="form-check-label" for="gym">باشگاه بدنسازی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="free-parking" checked>
                                    <label class="form-check-label" for="free-parking">پارکینگ رایگان</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="pets-friendly">
                                    <label class="form-check-label" for="pets-friendly">نگهداری حیوانات خانگی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="pool">
                                    <label class="form-check-label" for="pool">استخر</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="bar">
                                    <label class="form-check-label" for="bar">دسترسی به مترو</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="tv" checked>
                                    <label class="form-check-label" for="tv">تلویزیون</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="linens" checked>
                                    <label class="form-check-label" for="linens">تراس</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="heating" checked>
                                    <label class="form-check-label" for="heating">سیستم گرمایشی</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dishwasher">
                                    <label class="form-check-label" for="dishwasher">ماشین لباسشویی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="iron" checked>
                                    <label class="form-check-label" for="iron">گاز رومیزی</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="hair-dryer" checked>
                                    <label class="form-check-label" for="hair-dryer">آسانسور</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="kitchen" checked>
                                    <label class="form-check-label" for="kitchen">آشپزخانه</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="breakfast">
                                    <label class="form-check-label" for="breakfast">صبحانه</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="security-cameras">
                                    <label class="form-check-label" for="security-cameras">دوربین مداربسته</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label d-block fw-bold mb-2 pb-1">نگهداری حیوانات خانگی</label>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="allow-cats">
                                    <label class="form-check-label" for="allow-cats">گربه مجاز است</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="allow-dogs">
                                    <label class="form-check-label" for="allow-dogs">سگ مجار است</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label class="form-label" for="ap-description">توضیحات </label>
                    <textarea class="form-control" id="ap-description" rows="5" placeholder="ملک خود را شرح دهید"></textarea><span class="form-text">1500 کاراکتر باقی مانده است</span>
                </section>
                <!-- Price-->
                <section class="card card-body border-0 shadow-sm p-4 mb-4" id="price">
                    <h2 class="h5 mb-4"><i class="fi-cash text-primary fs-5 mt-n1 me-2"></i>قیمت</h2>
                    <label class="form-label" for="ap-price">قیمت <span class="text-danger">*</span></label>
                    <div class="d-sm-flex">
                        <input class="form-control w-100 me-2 mb-2" type="number" id="ap-price" min="200" step="50" required>
                        <select class="form-select w-25 me-2 mb-2">
                            <option value="usd">تومان</option>
                            <option value="eur">یورو</option>
                            <option value="gbp">دلار</option>
                            <option value="jpy">پوند</option>
                        </select>
                        <select class="form-select w-50 mb-2">
                            <option value="day">روزانه</option>
                            <option value="week">هفتگی</option>
                            <option value="month" selected>ماهیانه</option>
                            <option value="year">سالیانه</option>
                        </select>
                    </div>
                </section>
                <!-- Photos / video-->
                <section class="card card-body border-0 shadow-sm p-4 mb-4" id="photos">
                    <h2 class="h5 mb-4"><i class="fi-image text-primary fs-5 mt-n1 me-2"></i>عکس / ویدئو</h2>
                    <div class="alert alert-info mb-4" role="alert">
                        <div class="d-flex"><i class="fi-alert-circle me-2 me-sm-3"></i>
                            <p class="fs-sm mb-1">حداکثر حجم عکس 8 مگابایت است. فرمت ها: jpeg ، jpg ، png. ابتدا تصویر اصلی را قرار دهید.<br>حداکثر حجم فیلم 10 مگابایت است. فرمت ها: mp4 ، mov.</p>
                        </div>
                    </div>
                    <input class="file-uploader file-uploader-grid" type="file" multiple data-max-file-size="10MB" accept="image/png, image/jpeg, video/mp4, video/mov" data-label-idle="&lt;div class=&quot;btn btn-primary mb-3&quot;&gt; آپلود عکس / ویدئو &lt;i class=&quot;fi-cloud-upload ms-1&quot;&gt;&lt;/i&gt;&lt;/div&gt;&lt;br&gt;یا آن را به این قسمت بکشید">
                </section>
                <!-- Contacts-->
                <section class="card card-body border-0 shadow-sm p-4 mb-4" id="contacts">
                    <h2 class="h5 mb-4"><i class="fi-phone text-primary fs-5 mt-n1 me-2"></i>تماس با ما</h2>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="ap-fn">نام  <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="ap-fn" value="آنت" placeholder="نام خود را وارد کنید" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="ap-sn">نام خانوادگی <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="ap-sn" value="بلک" placeholder="نام خانوادگی خود را وارد کنید" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="ap-email">پست الکترونیکی<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="ap-email" value="annette_black@email.com" placeholder="ایمیل خود را وارد کنید">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label class="form-label" for="ap-phone">شماره تماس <span class="text-danger">*</span></label>
                            <input class="form-control" type="tel" id="ap-phone" data-format="custom" data-delimiter="-" data-blocks="3 3 4" value="302-555-0107" placeholder="000-000-0000">
                        </div>
                    </div>
                    <label class="form-label" for="ap-company-name">نام شرکت</label>
                    <input class="form-control" type="text" id="ap-company-name" placeholder="نام شرکت را وارد کنید">
                </section>
                <!-- Action buttons -->
                <section class="d-sm-flex justify-content-between pt-2"><a class="btn btn-outline-primary btn-lg d-block ps-3 mb-3 mb-sm-2" href="#preview-modal" data-bs-toggle="modal"><i class="fi-eye-on me-2"></i>پیش نمایش</a><a class="btn btn-primary btn-lg d-block mb-2" href="real-estate-property-promotion.html">ذخیره و ادامه</a></section>
            </div>
            <!-- Progress of completion-->
            <aside class="col-lg-3 offset-lg-1 d-none d-lg-block">
                <div class="sticky-top pt-5">
                    <h6 class="pt-5 mt-3 mb-2">لطفا اطلاعات را تکمیل کنید</h6>
                    <div class="progress mb-4" style="height: .25rem;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#basic-info" data-scroll data-scroll-offset="20">اطلاعات شخصی</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#location" data-scroll data-scroll-offset="20">موقعیت مکانی</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#details" data-scroll data-scroll-offset="20">جزئیات ملک</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-muted me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#price" data-scroll data-scroll-offset="20">قیمت</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-muted me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#photos" data-scroll data-scroll-offset="20">عکس / ویدئو</a></li>
                        <li class="d-flex align-items-center"><i class="fi-check text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#contacts" data-scroll data-scroll-offset="20">تماس با ما</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
@endsection
