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
                <form action="{{route('store.agency')}}" method="post">
                    @csrf

                    <!-- Basic info-->
                    <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">

                        <h2 class="h5 mb-4"><i class="fi-info-circle text-primary fs-5 mt-n1 me-2"></i>اطلاعات پایه</h2>
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <label class="form-label" for="ap-title">نام آژانس <span class="text-danger">*</span></label>
                                <input class="form-control" name="name" type="text" id="ap-title" placeholder="آژانس املاک ..." required>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label class="form-label" for="ap-title">تلفن ثابت <span class="text-danger">*</span></label>
                                <input class="form-control" name="local_phone" type="text" id="ap-title" placeholder="با پیش شماره" required>
                            </div>

                            <div class="col-sm-6 mb-3">
                                <label class="form-label" for="ap-title">فکس </label>
                                <input class="form-control" name="fax" type="text" id="ap-title" placeholder="222222222">
                            </div>

                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="ap-title">نام شما <span class="text-danger">*</span></label>
                                <input class="form-control" name="person_name" type="text" id="ap-title" placeholder="محمد محمدی" required>
                            </div>

                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="ap-title">شماره تماس <span class="text-danger">*</span></label>
                                <input class="form-control" name="phone" type="number" id="ap-title" placeholder="0912.." required>
                            </div>
                            <div class="col-sm-4 mb-3">

                                <label class="form-label" for="ap-title">ایمیل شما <span class="text-danger">*</span></label>
                                <input class="form-control" name="email" type="email" id="ap-title" placeholder="test@gmail.com"  required>
                            </div>

                        </div>

                        <label class="form-label" for="ap-description">معرفی آژانس <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="description" id="ap-description" rows="5" placeholder="خود را معرفی کنید ..."></textarea>



                    </section>
                    <!-- Location-->
                    <section class="card card-body border-0 shadow-sm p-4 mb-4" id="location">
                        <h2 class="h5 mb-4"><i class="fi-map-pin text-primary fs-5 mt-n1 me-2"></i>موقعیت مکانی</h2>
                        <div class="row">
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="select_country">کشور <span class="text-danger">*</span></label>
                                <select class="form-select"  name="country_id" id="select_country" required>
                                    <option value="101">ایران</option>

                                </select>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="select_zone">منطقه / استان <span class="text-danger">*</span></label>
                                <select class="form-select"  name="zone_id" id="select_zone" required>
                                    <option value="" >انتخاب</option>
                                    @foreach($zones as $zone)
                                        <option value="{{$zone->id}}" >{{$zone->name}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="select_city">شهر <span class="text-danger">*</span></label>
                                <select class="form-select"  name="city_id" id="select_city">
                                    <option value="" >انتخاب شهر</option>

                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 mb-3">
                                <label class="form-label" for="ap-zip">پلاک  <span class="text-danger">*</span></label>
                                <input class="form-control" name="plaque" type="number" id="ap-zip" placeholder="12"  required>
                                </select>
                            </div>
                            <div class="col-sm-4 mb-3">
                                <label class="form-label" for="ap-zip">کد پستی  <span class="text-danger">*</span></label>
                                <input class="form-control" type="number" name="postal_code" id="ap-zip" placeholder="1258963257" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ap-address">آدرس کامل<span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="address" id="ap-address" placeholder="خیابان قائم مقام فراهانی پلاک 210" required>
                        </div>
                        <div class="form-label fw-bold pt-3 pb-2">موقعیت روی نقشه</div>
                        <input class="form-control" type="hidden" id="map-latlng" name="latlng" required readonly>
                        <div id="map" class="rounded-3" style="height: 250px"></div>
                    </section>
                    <!-- Contacts-->
                    <section class="card card-body border-0 shadow-sm p-4 mb-4" id="contacts">
                        <h2 class="h5 mb-4"><i class="fi-phone text-primary fs-5 mt-n1 me-2"></i>شبکه های اجتماعی</h2>

                        <div class="d-flex align-items-center mb-3">
                            <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-facebook text-body"></i></div>
                            <input class="form-control" name="facebook" type="text" placeholder="اکانت فیسبوک">
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-telegram-circle text-body"></i></div>
                            <input class="form-control" name="telegram" type="text" placeholder="کانال تلگرام">
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-instagram text-body"></i></div>
                            <input class="form-control" type="text" name="instagram" placeholder="اکانت اینستاگرام">
                        </div>

                        <div class="d-flex align-items-center mb-3">
                        </div>

                    </section>

                    <section class="d-sm-flex justify-content-between pt-2">

                        <button type="submit" class="btn btn-primary btn-lg d-block mb-2" href="real-estate-property-promotion.html">ثبت اطلاعات</button></section>

                    <!-- Action buttons -->
                </form>

            </div>
            <!-- Progress of completion-->
            <aside class="col-lg-3 offset-lg-1 d-none d-lg-block">
                <div class="sticky-top pt-5">
                    <h6 class="pt-5 mt-3 mb-2">لطفا اطلاعات را تکمیل کنید</h6>
                    <div class="progress mb-4" style="height: .25rem;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center"><i class="fi-minus text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#basic-info" data-scroll data-scroll-offset="20">اطلاعات شخصی</a></li>
                        <li class="d-flex align-items-center"><i class="fi-minus text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#location" data-scroll data-scroll-offset="20">موقعیت مکانی</a></li>
                        <li class="d-flex align-items-center"><i class="fi-minus text-primary me-2"></i><a class="nav-link fw-normal ps-1 p-0" href="#contacts" data-scroll data-scroll-offset="20">شبکه های اجتماعی</a></li>
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
                    url: 'get/city/' + id,
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
