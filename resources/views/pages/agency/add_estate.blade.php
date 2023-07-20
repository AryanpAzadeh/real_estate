@extends('layouts.master')
@section('style')
    {{--    <link rel="stylesheet" media="screen" href="{{asset('/vendor/leaflet/dist/leaflet.css')}}"/>--}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

@endsection
@section('content')
    <div class="container mt-5 mb-md-4 py-5">
        <div class="row">
            <!-- Page content-->
            <div class="col-lg-8 add-property">
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('pages.index')}}">خانه</a></li>
                        <li class="breadcrumb-item"><a href="{{route('agency.home')}}">آژانس</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ثبت ملک</li>
                    </ol>
                </nav>
                <!-- Title-->
                <div class="mb-4">
                    <h1 class="h2 mb-0">ثبت ملک جدید</h1>
                </div>
                @if(count($errors))
                    <section class=" p-4 mb-4">
                        <!-- Danger alert -->
                        <div class="alert alert-danger d-flex" role="alert">
                            <i class="fi-x-circle me-2 me-sm-3 lead"></i>
                            <div>{{$errors->first()}}</div>
                        </div>
                    </section>
                @endif

                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <section class=" p-4 mb-4">
                        <div class="alert alert-success d-flex" role="alert">
                            <i class="fi-check-circle me-2 me-sm-3 lead"></i>
                            <div>{{session('success')}} </div>
                        </div>
                    </section>

                @endif
                <form action="{{route('store.agency.estate' , $agency->id)}}" method="post">
                    @csrf

                    <!-- Basic info-->
                    <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                        <h2 class="h5 mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>اطلاعات پایه</h2>
                        <div class="mb-3">
                            <label class="form-label" for="ap-title">نام ملک <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" id="ap-title" placeholder="عنوان آگهی"  name="title" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label class="form-label" for="ap-category">دسته بندی <span class="text-danger">*</span></label>
                                <select class="form-select" id="ap-category" name="category" required>
                                    <option value="" disabled hidden>انتخاب دسته بندی</option>
                                    <option value="اجاره">اجاره</option>
                                    <option value="فروش">فروش</option>
                                </select>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="form-label" for="ap-type">نوع ملک <span class="text-danger">*</span></label>
                                <select name="type_id" class="form-select" id="ap-type" required>
                                    <option value="" disabled hidden>انتخاب نوع ملک</option>
                                    @foreach(\App\Models\Type::all() as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </section>
                    <!-- Location-->
                    <section class="card card-body border-0 shadow-sm p-4 mb-4" id="location">
                        <h2 class="h5 mb-4"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>موقعیت مکانی</h2>
                        <div class="row">
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="ap-country">کشور <span class="text-danger">*</span></label>
                                <select class="form-select"  name="country_id" id="select_country" required>
                                    <option value="101">ایران</option>

                                </select>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="ap-city">منطقه / استان <span class="text-danger">*</span></label>
                                <select class="form-select"  name="zone_id" id="select_zone" required>
                                    <option value="" >انتخاب</option>
                                    @foreach($zones as $zone)
                                        <option value="{{$zone->id}}" >{{$zone->name}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="ap-district">شهر <span class="text-danger">*</span></label>
                                <select class="form-select"  name="city_id" id="select_city">
                                    <option value="" >انتخاب شهر</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-6 mb-3">
                                <label class="form-label" for="ap-zip">کد پستی  <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="postal_code" id="ap-zip" placeholder="کد پستی" required>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="form-label" for="ap-zip">پلاک  <span class="text-danger">*</span></label>
                                <input class="form-control" name="plaque" type="number" id="ap-zip" placeholder="12"  required>

                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="ap-address">آدرس <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="address" id="ap-address" placeholder="خیابان قائم مقام فراهانی پلاک 210" required>
                        </div>
                        <div class="form-label fw-bold pt-3 pb-2">نمایش روی نقشه</div>
                        <input class="form-control" type="hidden" id="map-latlng" name="latlng" required readonly>
                        <div id="map" class="rounded-3" style="height: 250px"></div>
                    </section>
                    <!-- Property details-->
                    <section class="card card-body border-0 shadow-sm p-4 mb-4" id="details">
                        <h2 class="h5 mb-4"><i class="fi-edit text-primary fs-5 mt-n1 me-2"></i>جزئیات ملک</h2>
                        <div class="mb-4" style="max-width: 25rem;">
                            <label class="form-label" for="ap-area">مساحت کل بر اساس متر مربع</label>
                            <input class="form-control" name="area" type="number" id="ap-area" min="20" placeholder="متراژ را وارد کنید" value="120" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label d-block fw-bold mb-2 pb-1">تعداد اتاق خواب</label>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bedrooms">
                                <input class="btn-check" type="radio" id="studio" name="bedrooms" value="0">
                                <label class="btn btn-outline-secondary fw-normal" for="studio">0</label>
                                <input class="btn-check" type="radio" id="bedrooms-1" name="bedrooms" value="1">
                                <label class="btn btn-outline-secondary fw-normal" for="bedrooms-1">1</label>
                                <input class="btn-check" type="radio" id="bedrooms-2" name="bedrooms" value="2">
                                <label class="btn btn-outline-secondary fw-normal" for="bedrooms-2">2</label>
                                <input class="btn-check" type="radio" id="bedrooms-3" name="bedrooms" value="3">
                                <label class="btn btn-outline-secondary fw-normal" for="bedrooms-3">3</label>
                                <input class="btn-check" type="radio" id="bedrooms-4" name="bedrooms" checked value="4">
                                <label class="btn btn-outline-secondary fw-normal" for="bedrooms-4">4</label>
                                <input class="btn-check" type="radio" id="bedrooms-5" name="bedrooms" value="+5">
                                <label class="btn btn-outline-secondary fw-normal" for="bedrooms-5">5+</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label d-block fw-bold mb-2 pb-1">تعداد سرویس بهداشتی</label>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of bathrooms">
                                <input class="btn-check" type="radio" id="bathrooms-1" name="wc" value="1">
                                <label class="btn btn-outline-secondary fw-normal" for="bathrooms-1">1</label>
                                <input class="btn-check" type="radio" id="bathrooms-2" name="wc" value="2" checked>
                                <label class="btn btn-outline-secondary fw-normal" for="bathrooms-2">2</label>
                                <input class="btn-check" type="radio" id="bathrooms-3" name="wc" value="3">
                                <label class="btn btn-outline-secondary fw-normal" for="bathrooms-3">3</label>
                                <input class="btn-check" type="radio" id="bathrooms-4" name="wc" value="4">
                                <label class="btn btn-outline-secondary fw-normal" for="bathrooms-4">4</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label d-block fw-bold mb-2 pb-1">تعداد پارکینگ</label>
                            <div class="btn-group btn-group-sm" role="group" aria-label="Choose number of parking spots">
                                <input class="btn-check" type="radio" id="parking-1" name="parking" value="1">
                                <label class="btn btn-outline-secondary fw-normal" for="parking-1">1</label>
                                <input class="btn-check" type="radio" id="parking-2" name="parking" value="2" checked>
                                <label class="btn btn-outline-secondary fw-normal" for="parking-2">2</label>
                                <input class="btn-check" type="radio" id="parking-3" name="parking" value="3">
                                <label class="btn btn-outline-secondary fw-normal" for="parking-3">3</label>
                                <input class="btn-check" type="radio" id="parking-4" name="parking" value="4">
                                <label class="btn btn-outline-secondary fw-normal" for="parking-4">4</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label d-block fw-bold mb-2 pb-1">امکانات رفاهی</label>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" id="wifi" value="وای فای" >
                                        <label class="form-check-label" for="wifi">وای فای</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" id="air-condition" value="تهویه هوا" >
                                        <label class="form-check-label" for="air-condition">تهویه هوا</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="بالکن" id="balcony">
                                        <label class="form-check-label" for="balcony">بالکن</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="گاراژ" id="garage">
                                        <label class="form-check-label" for="garage">گاراژ</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="باشگاه بدنسازی" id="gym">
                                        <label class="form-check-label" for="gym">باشگاه بدنسازی</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" id="free-parking" value="پارکینگ رایگان" >
                                        <label class="form-check-label" for="free-parking">پارکینگ رایگان</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" id="pets-friendly" value="نهگداری حیوانات خانگی">
                                        <label class="form-check-label" for="pets-friendly">نگهداری حیوانات خانگی</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="استخر" id="pool">
                                        <label class="form-check-label" for="pool">استخر</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="دسترسی به متری" id="bar">
                                        <label class="form-check-label" for="bar">دسترسی به مترو</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="تراس" id="linens" >
                                        <label class="form-check-label" for="linens">تراس</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="سیستم گرمایشی" id="heating" >
                                        <label class="form-check-label" for="heating">سیستم گرمایشی</label>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="ماشین لباسشویی" id="dishwasher">
                                        <label class="form-check-label" for="dishwasher">ماشین لباسشویی</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="گاز رومیزی" id="iron">
                                        <label class="form-check-label" for="iron">گاز رومیزی</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="آسانسور" id="hair-dryer">
                                        <label class="form-check-label" for="hair-dryer">آسانسور</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="آشپزخانه کابینت دار" id="kitchen">
                                        <label class="form-check-label" for="kitchen">آشپزخانه با کابینت</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="features[]" value="دوربین مداربسته" id="security-cameras">
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
                                        <input class="form-check-input" name="pet" type="checkbox" id="allow-cats" value="0">
                                        <label class="form-check-label" for="allow-cats">مجاز نیست</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" name="pet" type="checkbox" id="allow-dogs" value="1">
                                        <label class="form-check-label" for="allow-dogs">مجاز است</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label class="form-label" for="ap-description">توضیحات </label>
                        <textarea class="form-control" name="description" id="ap-description" rows="5" placeholder="ملک خود را شرح دهید"></textarea>
                    </section>
                    <!-- Price-->
                    <section class="card card-body border-0 shadow-sm p-4 mb-4" id="price">
                        <h2 class="h5 mb-4"><i class="fi-cash text-primary fs-5 mt-n1 me-2"></i>قیمت</h2>
                        <label class="form-label" for="ap-price">قیمت <span class="text-danger">*</span></label>
                        <div class="d-sm-flex">
                            <input name="price" class="form-control w-100 me-2 mb-2" type="number" id="ap-price" required>
                            <select class="form-select w-50 mb-2" name="price_type">
                                <option value="روزانه">روزانه</option>
                                <option value="هفتگی">هفتگی</option>
                                <option value="ماهیانه" selected>ماهیانه</option>
                                <option value="سالیانه">سالیانه</option>
                                <option value="فروش">فروش</option>
                            </select>
                        </div>
                    </section>
                    <!-- Contacts-->
                    <section class="card card-body border-0 shadow-sm p-4 mb-4" id="consultant">
                        <h2 class="h5 mb-4"><i class="fi-phone text-primary fs-5 mt-n1 me-2"></i>مشاور</h2>
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <label class="form-label" for="ap-consultant_id">مشاور این آگهی <span class="text-danger">*</span></label>
                                <select class="form-select"  id="ap-consultant_id" name="consultant_id" required>
                                    @foreach($consultants as $consultant)
                                        <option value="{{$consultant->id}}">{{$consultant->first_name . ' ' . $consultant->last_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                    </section>
                    <!-- Action buttons -->
                    <section class="d-sm-flex justify-content-between pt-2">

                        <button type="submit" class="btn btn-primary btn-lg d-block mb-2" >ذخیره و ادامه</button>
                    </section>
                </form>

            </div>
            <!-- Progress of completion-->
            <aside class="col-lg-3 offset-lg-1 d-none d-lg-block">
                <div class="sticky-top pt-5">
                    <div class="progress mb-4" style="height: .25rem;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center"><i class="fi-minus text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#basic-info" data-scroll data-scroll-offset="20">اطلاعات شخصی</a></li>
                        <li class="d-flex align-items-center"><i class="fi-minus text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#location" data-scroll data-scroll-offset="20">موقعیت مکانی</a></li>
                        <li class="d-flex align-items-center"><i class="fi-minus text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#details" data-scroll data-scroll-offset="20">جزئیات ملک</a></li>
                        <li class="d-flex align-items-center"><i class="fi-minus text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#price" data-scroll data-scroll-offset="20">قیمت</a></li>
                        <li class="d-flex align-items-center"><i class="fi-minus text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#consultant" data-scroll data-scroll-offset="20">مشاور</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
@endsection
@section('script')
    {{--    <script src="{{asset('/vendor/leaflet/dist/leaflet.js')}}"></script>--}}

    {{--    <script src="{{asset('/vendor/cleave.js/dist/cleave.min.js')}}"></script>--}}

    <script>

        const map = L.map('map').setView([37.553387, 45.077956], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);




        var marker;
        var temp = 0;

        function onMapClick(e) {
            if (temp !== 0)
            {
                marker.removeFrom(map);
            }
            marker = new L.marker(e.latlng).addTo(map);
            temp++;
            document.getElementById('map-latlng').value = e.latlng;


        }

        map.on('click', onMapClick);

    </script>

    <script type="text/javascript">

        $('#select_zone').change(function () {
            var id = $(this).val();
            if (id === '') {
                $('#select_city').find('option').not(':first').remove();
                // $('select').niceSelect('destroy'); //destroy the plugin
                // $('select').niceSelect(); //apply again
            } else {
                $('#select_city').find('option').not(':first').remove();


                $.ajax({
                    url: '/get/city/' + id,
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        var len = 0;
                        if (response.data != null) {
                            len = response.data.length;
                        }



                        if (len > 0) {
                            for (var i = 0; i < len; i++) {
                                var id = response.data[i].id;
                                var name = response.data[i].name;

                                var option = '<option value="' + id + '">' + name + '</option>';
                                $("#select_city").append(option);
                            }

                        }
                    },
                    error: function(xhr, status, error) {
                        var err = eval("(" + xhr.responseText + ")");
                        alert(err.Message);
                    }
                })
            }


        });


    </script>

@endsection
