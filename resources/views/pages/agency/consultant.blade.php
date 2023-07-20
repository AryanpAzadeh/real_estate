@extends('layouts.master')
@section('style')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

@endsection
@section('content')
    <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
        <!-- Breadcrumb-->
        <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('agency.home')}}">خانه</a></li>
                <li class="breadcrumb-item active"><a href="{{route('agency.consultant')}}">مشاورین املاک من</a></li>
            </ol>
        </nav>
        <!-- Page content-->
        <div class="row">
            <!-- Sidebar-->
            @include('layouts.agency.side_menu' , $agency)
            <!-- Content-->
            <div class="col-lg-8 col-md-7 mb-5">
                <h1 class="h2">مشاورین املاک من</h1>
                <p class="pt-1 mb-4">لیست مشاورین املاک شما</p>
                <!-- Nav tabs-->
                <ul class="nav nav-tabs flex-column flex-sm-row align-items-stretch align-items-sm-start border-bottom mb-4" role="tablist">
                    <li class="nav-item ms-sm-3 mb-3"><a class="nav-link text-center active" href="#list" data-bs-toggle="tab" role="tab" aria-controls="reviews-about-you" aria-selected="true">لیست</a></li>
                    <li class="nav-item mb-3"><a class="nav-link text-center" href="#add" data-bs-toggle="tab" role="tab" aria-controls="reviews-by-you" aria-selected="false">مورد جدید</a></li>
                </ul>
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
                <!-- Tabs content-->
                <div class="tab-content pt-2">
                    <!-- Reviews about you tab-->
                    <div class="tab-pane fade show active" id="list" role="tabpanel">
                        <!-- Review-->
                       @foreach($consultants as $consultant)
                            <div class="mb-4 pb-4 border-bottom">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-center ps-2"><img class="rounded-circle ms-1" src="{{asset('/storage/consultant_images/' . $consultant->image)}}" width="48" alt="{{$consultant->code}}">
                                        <div class="pe-2">
                                            <h6 class="fs-base mb-0">{{$consultant->first_name . ' ' . $consultant->last_name}}</h6>
                                        </div>
                                    </div><span class="text-muted fs-sm">تاریخ ثبت : {{verta($consultant->active_date)->format('d-m-Y')}}</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button data-bs-toggle="modal" data-bs-target="#edit-{{$consultant->id}}" class="btn-like" type="button"><i class="fi-edit"></i><span>ویرایش</span></button>
                                    <div class="border-end me-1">&nbsp;</div>
                                    @if($consultant->user->is_active == 1)
                                        <a  class="btn btn-dislike" href="{{route('agency.consultant.mark' , $consultant->id)}}"><i class="fi-lock"></i><span>غیرفعال کردن</span></a>
                                    @else
                                        <a href="{{route('agency.consultant.mark' , $consultant->id)}}" class="btn btn-like" type="button"><i class="fi-lock"></i><span>فعال کردن</span></a>
                                    @endif
                                </div>
                            </div>


                            <div class="modal fade" id="edit-{{$consultant->id}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">ویرایش : {{$consultant->first_name . ' ' . $consultant->last_name}}</h4>
                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{route('update.agency.consultant' , $consultant->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                        <div class="modal-body">

                                                <!-- Basic info-->
                                                <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">

                                                    <div class="row">


                                                        <div class="col-sm-6 mb-3">
                                                            <label class="form-label" for="ap-title">نام <span class="text-danger">*</span></label>
                                                            <input class="form-control" name="first_name" type="text" id="ap-title" placeholder="محمد" required value="{{$consultant->first_name}}">
                                                        </div>

                                                        <div class="col-sm-6 mb-3">
                                                            <label class="form-label" for="ap-title">نام خانوادگی<span class="text-danger">*</span></label>
                                                            <input class="form-control" name="last_name" type="text" id="ap-title" placeholder="محمدی" required value="{{$consultant->last_name}}">
                                                        </div>
                                                        <div class="col-sm-12 mb-3">
                                                            <label for="formFile" class="form-label">تصویر</label>
                                                            <input class="form-control d-block" name="image" type="file" id="formFile">
                                                        </div>

                                                        <div class="col-sm-4 mb-3">
                                                            <label class="form-label" for="ap-title">کد ملی <span class="text-danger">*</span></label>
                                                            <input class="form-control" name="national_code" type="number" id="ap-title" placeholder="10 رقم" required value="{{$consultant->national_code}}">
                                                        </div>

                                                        <div class="col-sm-4 mb-3">
                                                            <label class="form-label" for="ap-title">شماره تماس <span class="text-danger">*</span></label>
                                                            <input class="form-control" name="phone" type="number" id="ap-title" placeholder="0912.." required value="{{$consultant->phone}}">
                                                        </div>
                                                        <div class="col-sm-4 mb-3">

                                                            <label class="form-label" for="ap-title">ایمیل  <span class="text-danger">*</span></label>
                                                            <input class="form-control" name="email" type="email" id="ap-title" placeholder="test@gmail.com"  required value="{{$consultant->email}}">
                                                        </div>

                                                    </div>
                                                </section>

                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">بستن</button>
                                            <button class="btn btn-primary btn-shadow btn-sm" type="submit">ذخیره</button>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                       @endforeach

                    </div>
                    <!-- Reviews by you tab-->
                    <div class="tab-pane fade" id="add" role="tabpanel">
                        <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-stretch justify-content-between pb-4 mb-2 mb-md-3">
                            <h3 class="h4 mb-sm-0">اضافه کردن مشاور جدید</h3>
                        </div>
                        <form action="{{route('store.agency.consultant' , $agency->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Basic info-->
                            <section class="card card-body border-0 shadow-sm p-4 mb-4" id="basic-info">
                                <div class="row">


                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="ap-title">نام <span class="text-danger">*</span></label>
                                        <input class="form-control" name="first_name" type="text" id="ap-title" placeholder="محمد" required>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <label class="form-label" for="ap-title">نام خانوادگی<span class="text-danger">*</span></label>
                                        <input class="form-control" name="last_name" type="text" id="ap-title" placeholder="محمدی" required>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <label for="formFile" class="form-label">تصویر</label>
                                        <input class="form-control d-block" name="image" type="file" id="formFile" required>
                                    </div>

                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="ap-title">کد ملی <span class="text-danger">*</span></label>
                                        <input class="form-control" name="national_code" type="number" id="ap-title" placeholder="10 رقم" required>
                                    </div>

                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="ap-title">شماره تماس <span class="text-danger">*</span></label>
                                        <input class="form-control" name="phone" type="number" id="ap-title" placeholder="0912.." required>
                                    </div>
                                    <div class="col-sm-4 mb-3">

                                        <label class="form-label" for="ap-title">ایمیل  <span class="text-danger">*</span></label>
                                        <input class="form-control" name="email" type="email" id="ap-title" placeholder="test@gmail.com"  required>
                                    </div>

                                </div>
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
                                            @foreach(\App\Models\Zone::where('country_id' , 101)->select(['id' , 'name'])->get() as $zone)
                                                <option value="{{$zone->id}}" >{{$zone->name}}</option>

                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-sm-4 mb-3">
                                        <label class="form-label" for="select_city">شهر <span class="text-danger">*</span></label>
                                        <select class="form-select"  name="city_id" id="select_city" required>
                                            <option value="" >انتخاب شهر</option>

                                        </select>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary btn-lg d-block mb-2" href="real-estate-property-promotion.html">ثبت اطلاعات</button>
                                    </div>
                                </div>

                            </section>
                        </form>
                    </div>
                </div>
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
