@extends('layouts.master')

@section('style')
    <link rel="stylesheet" type="text/css" href="{{\Illuminate\Support\Facades\URL::asset('/admin/assets/vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{\Illuminate\Support\Facades\URL::asset('/admin/assets/vendors/css/file-uploaders/dropzone.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{\Illuminate\Support\Facades\URL::asset('/admin/assets/css/plugins/file-uploaders/dropzone.css')}}">
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
                    <h1 class="h2 mb-0">ثبت تصاویر</h1>
                    <span>تصاویر آگهی خود را در کادر مشخص شده بکشید و رها کنید؛ یا در محدوده مشخص شده کلیک کنید</span>
                </div>
                <section class="d-sm-flex justify-content-between pt-2">

                    <a class="btn btn-primary btn-lg d-block mb-2" href="{{route('agency.pay_estate' , $estate->id)}}">ذخیره و ادامه</a>
                </section>
                <form action="{{route('agency.store_image_estate' , $estate->id)}}" method="post" class="dropzone dropzone-area" id="dpz-remove-thumb" enctype="multipart/form-data">
                    @csrf

                    <div class="dz-message">فایل های خود را برای ارسال به اینجا بکشید</div>
                    <!-- Basic info-->
                    <!-- Action buttons -->
                </form>


            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{\Illuminate\Support\Facades\URL::asset('/admin/assets/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{\Illuminate\Support\Facades\URL::asset('/admin/assets/vendors/js/ui/prism.min.js')}}"></script>
    <script src="{{\Illuminate\Support\Facades\URL::asset('/admin/assets/js/scripts/extensions/dropzone.js')}}"></script>
@endsection
