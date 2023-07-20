@extends('layouts.master')
@section('style')
    {{--    <link rel="stylesheet" media="screen" href="{{asset('/vendor/leaflet/dist/leaflet.css')}}"/>--}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

@endsection
@section('content')
    <div class="container-fluid mt-5 pt-5 p-0">
        <div class="row g-0 mt-n3">
            <!-- Filters sidebar (Offcanvas on mobile)-->
            <aside class="col-lg-4 col-xl-3 border-top-lg border-end-lg shadow-sm px-3 px-xl-4 px-xxl-5 pt-lg-2">
                <div class="offcanvas offcanvas-start offcanvas-collapse" id="filters-sidebar">
                    <div class="offcanvas-header d-flex d-lg-none align-items-center">
                        <h2 class="h5 mb-0">فیلتر جستجو</h2>
                        <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <form action="{{route('pages.search_estate')}}" method="get">
                        <div class="offcanvas-body py-lg-4">
                            <div class="pb-4 mb-2">
                                <h3 class="h6">موقعیت مکانی</h3>
                                <select class="form-select mb-2" name="zone_id" id="select_zone">
                                    <option value="" selected disabled>انتخاب استان</option>
                                    @foreach($zones as $zone)
                                        <option value="{{$zone->id}}" >{{$zone->name}}</option>

                                    @endforeach

                                </select>
                                <select class="form-select" name="city_id" id="select_city">
                                    <option value="" selected disabled>انتخاب شهر</option>

                                </select>
                            </div>
                            <div class="pb-4 mb-2">
                                <h3 class="h6">نوع ملک</h3>
                                <div class="overflow-auto" data-simplebar data-simplebar-auto-hide="false" data-simplebar-direction="rtl" style="height: 11rem;">
                                    @foreach(\App\Models\Type::all() as $type)
                                        <div class="form-check">
                                            <input class="form-check-input" value="{{$type->id}}" name="type_id" type="radio" id="type-{{$type->id}}">
                                            <label class="form-check-label fs-sm" for="type-{{$type->id}}">{{$type->name}}</label>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="pb-4 mb-2">
                                <h3 class="h6 pt-1">تعداد اتاق خواب و سرویس بهداشتی</h3>
                                <select class="form-select mb-2" name="bedrooms" id="bedrooms">
                                    <option value="" selected disabled>اتاق خواب</option>

                                        <option value="0" >0</option>
                                        <option value="1" >1</option>
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        <option value="+5" >+5</option>



                                </select>
                                <select class="form-select mb-2" name="wc" id="wc">
                                    <option value="" selected disabled>سرویس بهداشتی</option>

                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>




                                </select>
                            </div>
                            <div class="pb-4 mb-2">
                                <h3 class="h6 pt-1">متراژ (مترمربع)</h3>
                                <div class="d-flex align-items-center">
                                    <input class="form-control w-100" type="number" name="area_min" min="20" max="500" step="10" placeholder="حداقل">
                                    <div class="mx-2">&mdash;</div>
                                    <input class="form-control w-100" type="number" name="area_max" min="20" max="500" step="10" placeholder="حداکثر">
                                </div>
                            </div>
                            <div class="pb-4 mb-2">
                                <h3 class="h6">نگهداری حیوان خانگی</h3>
                                <div class="form-check">
                                    <input class="form-check-input" value="1" name="pet" type="radio" id="allow-cats">
                                    <label class="form-check-label fs-sm" for="allow-cats"> مجاز است</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="0" name="pet" type="radio" id="allow-dogs">
                                    <label class="form-check-label fs-sm" for="allow-dogs"> مجاز نیس</label>
                                </div>
                            </div>

                            <div class="border-top py-4">
                                <button class="btn btn-primary" type="submit"><i class="fi-filter me-2"></i>فیلتر کن</button>
                                <a class="btn btn-outline-primary" href="{{route('pages.estate')}}"><i class="fi-rotate-right me-2"></i>حذف فیلتر</a>
                            </div>
                        </div>

                    </form>
                </div>
            </aside>
            <!-- Page content-->
            <div class="col-lg-8 col-xl-9 position-relative overflow-hidden pb-5 pt-4 px-3 px-xl-4 px-xxl-5">
                <!-- Map popup-->
                <!-- Breadcrumb-->
                <nav class="mb-3 pt-md-2" aria-label="Breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('pages.index')}}">خانه</a></li>
                        <li class="breadcrumb-item active" aria-current="page">املاک</li>
                    </ol>
                </nav>
                <!-- Title-->
                <div class="d-sm-flex align-items-center justify-content-between pb-3 pb-sm-4">
                    <h1 class="h4 mb-sm-0">لیست املاک </h1>
                </div>
                <!-- Sorting-->
                <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch my-2">

                    <hr class="d-none d-sm-block w-100 mx-4">
                    <div class="d-none d-sm-flex align-items-center flex-shrink-0 text-muted"></div>
                </div>
                <!-- Catalog grid-->
                <div class="row g-4 py-4">
                    <!-- Item-->
                    @foreach($estates as $estate)
                        <div class="col-sm-6 col-xl-4">
                            <div class="card shadow-sm card-hover border-0 h-100">
                                <div class="tns-carousel-wrapper card-img-top card-img-hover"><a class="img-overlay" href="{{route('pages.single_estate' , $estate->code)}}"></a>
                                    <div class="content-overlay end-0 top-0 pt-3 ps-3">
                                        @auth()
                                            @if(auth()->user()->user_type == 'user')
                                                <button class="btn btn-icon btn-light btn-xs text-primary rounded-circle" type="button" data-bs-toggle="tooltip" data-bs-placement="right" title="نشان کردن"><i class="fi-heart"></i></button>
                                            @endif
                                        @endauth
                                    </div>
                                    <div class="tns-carousel-inner" dir="ltr"><img src="{{asset('/storage/estate_images/' . $estate->id .'/' . $estate->images()->first()->image)}}" alt="Image"></div>
                                </div>
                                <div class="card-body position-relative pb-3">
                                    <h4 class="mb-1 fs-xs fw-normal text-uppercase text-primary">{{$estate->category}} / {{$estate->type->name}}</h4>
                                    <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="{{route('pages.single_estate' , $estate->code)}}">{{$estate->title}}</a></h3>
                                    <p class="mb-2 fs-sm text-muted">{{$estate->zone->name . '، ' . $estate->city->name . '، ' . $estate->address}}</p>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm">{{$estate->bedrooms}}<i class="fi-bed me-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">{{$estate->wc}}<i class="fi-bath me-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">{{$estate->parking}}<i class="fi-car me-1 mt-n1 fs-lg text-muted"></i></span></div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- Pagination-->
                <nav class="border-top pb-md-4 pt-4 mt-2" aria-label="Pagination">
                    {{$estates->links()}}
                </nav>
            </div>
        </div>
    </div>
@endsection
@section('script')
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
