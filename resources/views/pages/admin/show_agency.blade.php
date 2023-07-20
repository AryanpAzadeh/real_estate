@extends('layouts.admin.master')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/assets/css/pages/app-invoice.css')}}">
@endsection
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- app invoice View Page -->
                <section class="invoice-view-wrapper">
                    <div class="row">
                        <!-- invoice view page -->
                        <div class="col-xl-9 col-md-8 col-12">
                            <div class="card invoice-print-area">
                                <div class="card-content">
                                    <div class="card-body pb-0 mx-25">
                                        <!-- header section -->
                                        <div class="row line-height-2 mt-n50">
                                            <div class="col-xl-4 col-md-12 mb-50 mb-xl-0">
                                                <span class="invoice-number mr-50">کد آژانس</span>
                                                <span>{{$agency->code}}</span>
                                            </div>
                                            <div class="col-xl-8 col-md-12">
                                                <div class="d-flex align-items-center justify-content-xl-end flex-wrap">
                                                    <div class="mr-3">
                                                        <small class="text-muted">تاریخ ثبت نام:</small>
                                                        <span>{{verta($agency->created_at)->format('d-m-Y')}}</span>
                                                    </div>
                                                    <div>
                                                        <small class="text-muted">تاریخ پذیرش:</small>
                                                        <span>{{verta($agency->active_date)->format('d-m-Y')}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- logo and title -->
                                        <div class="row my-3">
                                            <div class="col-sm-6">
                                                <h4 class="text-primary">{{$agency->name}}</h4>
                                                    @if($agency->user_id == null)
                                                    <span class="badge badge-danger">بررسی نشده</span>

                                                @else
                                                    <span class="badge badge-success">بررسی شده</span>


                                                @endif
                                            </div>
                                            <div class="mt-1 mt-sm-0 col-sm-6 d-flex justify-content-end">
                                                <img src="../../assets/images/pages/pixinvent-logo.png" alt="website logo" height="46" width="164">
                                            </div>
                                        </div>
                                        <hr>
                                        <!-- invoice address and contact -->
                                        <div class="row invoice-info">
                                            <div class="col-6 mt-1">
                                                <h6 class="invoice-from">اطلاعات پایه</h6>
                                                <div class="mb-75">
                                                    <span>نام و نام خانوادگی : {{$agency->person_name}}</span>
                                                </div>
                                                <div class="mb-75">
                                                    <span>تلفن ثابت : {{$agency->local_phone}}</span>
                                                </div>
                                                <div class="mb-75">
                                                    <span>شماره تماس : {{$agency->phone}}</span>
                                                </div>
                                                <div class="mb-75">
                                                    <span>ایمیل : {{$agency->email}}</span>
                                                </div>
                                                <div class="mb-75">
                                                    <span >معرفی : {{$agency->description}}</span>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-1">
                                                <h6 class="invoice-to">موقعیت مکانی</h6>
                                                <div class="mb-75">
                                                    <span>{{$agency->zone->name}} - {{$agency->city->name}}</span>
                                                </div>
                                                <div class="mb-75">
                                                    <span>کد پستی : {{$agency->postal_code}}</span>
                                                </div>
                                                <div class="mb-75">
                                                    <span>پلاک : {{$agency->plaque}}</span>
                                                </div>
                                                <div class="mb-75">
                                                    <span>{{$agency->address}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="invoice-product-details table-responsive mx-md-25">
                                        <table class="table table-borderless mb-0">
                                            <thead>
                                            <tr class="border-0">
                                                <th scope="col">نام و نام خانوادگی</th>
                                                <th scope="col">وضعیت</th>
                                                <th scope="col">شماره تماس</th>
                                                <th scope="col">ایمیل</th>
                                                <th scope="col" >کد ملی</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($agency->consultants as $con)
                                                <tr>
                                                    <td>{{$con->first_name . ' ' . $con->last_name}}</td>
                                                    <td>{{$con->user->is_active == 1 ? 'فعال' : 'غیرفعال'}}</td>
                                                    <td>{{$con->phone}}</td>
                                                    <td>{{$con->email}}</td>
                                                    <td>{{$con->national_code}}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <hr>

                                </div>
                            </div>
                        </div>
                        <!-- invoice action  -->
                        <div class="col-xl-3 col-md-4 col-12">
                            <div class="card invoice-action-wrapper shadow-none border">
                                <div class="card-body">
                                    @if($agency->user_id == null)
                                        <div class="invoice-action-btn">
                                            <a href="{{route('admin.agency.verify' , $agency->id)}}" class="btn btn-primary btn-block invoice-send-btn">
                                                <i class="bx bx-check"></i>
                                                <span>تایید و ساخت اکانت</span>
                                            </a>
                                        </div>
                                    @endif
                                    <div class="invoice-action-btn">
                                        <button class="btn btn-light-primary btn-block invoice-print">
                                            <span>چاپ</span>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('/admin/assets/js/scripts/pages/app-invoice.js')}}"></script>
@endsection
