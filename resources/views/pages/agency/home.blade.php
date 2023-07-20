@extends('layouts.master')
@section('style')
    {{--    <link rel="stylesheet" media="screen" href="{{asset('/vendor/leaflet/dist/leaflet.css')}}"/>--}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

@endsection
@section('content')
    <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
        <!-- Breadcrumb-->
        <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('agency.home')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">اطلاعات حساب کاربری</li>
            </ol>
        </nav>
        <!-- Page content-->
        <div class="row">
            <!-- Sidebar-->
            @include('layouts.agency.side_menu' , $agency)
            <!-- Content-->
            <div class="col-lg-8 col-md-7 mb-5 account">
                <h1 class="h2">اطلاعات حساب کاربری</h1>
                <div class="border rounded-3 p-3 mb-4" id="personal-info">
                    @if(count($errors))
                        <div class="alert alert-danger alert-dismissible fade show d-flex" role="alert">
                            <i class="fi-x-circle me-2 me-sm-3 lead"></i>
                            <div>{{$errors->first()}}</div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show d-flex" role="alert">
                            <i class="fi-check-circle me-2 me-sm-3 lead"></i>
                            <div>{{session('success')}} </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                        <form action="{{route('update.agency' , $agency->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <!-- Company name-->
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold">پلاک</label>
                                        <div id="company-value">{{$agency->plaque}}</div>
                                    </div>
                                    <div class="me-n3" data-bs-toggle="tooltip" title="ویرایش"><a class="nav-link py-0" href="#plaque-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="plaque-collapse" data-bs-parent="#personal-info">
                                    <input class="form-control mt-3" type="text" data-bs-binded-element="#plaque-value" data-bs-unset-value="Not specified" name="plaque" value="{{$agency->plaque}}" required>
                                </div>
                            </div>
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold">شماره ثابت</label>
                                        <div id="company-value">{{$agency->local_phone}}</div>
                                    </div>
                                    <div class="me-n3" data-bs-toggle="tooltip" title="ویرایش"><a class="nav-link py-0" href="#local-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="local-collapse" data-bs-parent="#personal-info">
                                    <input class="form-control mt-3" type="text" data-bs-binded-element="#local-value" data-bs-unset-value="Not specified" name="local_phone" value="{{$agency->local_phone}}" required>
                                </div>
                            </div>
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold">فکس</label>
                                        <div id="company-value">{{$agency->fax}}</div>
                                    </div>
                                    <div class="me-n3" data-bs-toggle="tooltip" title="ویرایش"><a class="nav-link py-0" href="#fax-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="fax-collapse" data-bs-parent="#personal-info">
                                    <input class="form-control mt-3" type="text" data-bs-binded-element="#fax-value" data-bs-unset-value="Not specified" name="fax" value="{{$agency->fax}}">
                                </div>
                            </div>
                            <div class="border-bottom pb-3 mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold">کدپستی</label>
                                        <div id="company-value">{{$agency->postal_code}}</div>
                                    </div>
                                    <div class="me-n3" data-bs-toggle="tooltip" title="ویرایش"><a class="nav-link py-0" href="#postal_code-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="postal_code-collapse" data-bs-parent="#personal-info">
                                    <input class="form-control mt-3" type="text" data-bs-binded-element="#plaque-value" data-bs-unset-value="Not specified" name="postal_code" value="{{$agency->postal_code}}" required>
                                </div>
                            </div>
                            <!-- Address-->
                            <div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="pe-2">
                                        <label class="form-label fw-bold">آدرس</label>
                                        <div id="address-value">{{$agency->address}}</div>
                                    </div>
                                    <div class="me-n3" data-bs-toggle="tooltip" title="ویرایش"><a class="nav-link py-0" href="#address-collapse" data-bs-toggle="collapse"><i class="fi-edit"></i></a></div>
                                </div>
                                <div class="collapse" id="address-collapse" data-bs-parent="#personal-info">
                                    <input class="form-control mt-3" type="text" data-bs-binded-element="#address-value" data-bs-unset-value="{{$agency->address}}" name="address" value="{{$agency->address}}" required>
                                    <br>
                                    <input class="form-control" type="hidden" id="map-latlng" name="latlng" value="{{$agency->latlng}}" required readonly>
                                    <div id="map" class="rounded-3" style="height: 250px"></div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <label class="form-label fw-bold mb-3">شبکه های اجتماعی</label>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-facebook text-body"></i></div>
                                <input class="form-control" name="facebook" type="text" placeholder="اکانت فیسبوک" value="{{$agency->facebook}}">
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-telegram-circle text-body"></i></div>
                                <input class="form-control" name="telegram" type="text" placeholder="کانال تلگرام" value="{{$agency->telegram}}">
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn btn-icon btn-light btn-xs shadow-sm rounded-circle pe-none flex-shrink-0 me-3"><i class="fi-instagram text-body"></i></div>
                                <input class="form-control" type="text" name="instagram" placeholder="اکانت اینستاگرام" value="{{$agency->instagram}}">
                            </div>
                            <div class="d-flex align-items-center justify-content-between border-top mt-4 pt-4 pb-1">
                                <button class="btn btn-primary px-3 px-sm-4" type="submit">ذخیره تغییرات</button>
                            </div>
                        </form>

                </div>
                <!-- Socials-->

            </div>
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
@endsection
