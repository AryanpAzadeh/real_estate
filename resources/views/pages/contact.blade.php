@extends('layouts.master')

@section('content')
    <div class="container mt-5 mb-md-4 pt-5">
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('pages.index')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">تماس با ما</li>
            </ol>
        </nav>
    </div>
    <!-- Contact cards-->
    <section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
        <div class="row g-4">
            <!-- Item-->
            <div class="col-md-4"><a class="icon-box card card-hover h-100" href="mailto:aryazdh@gmail.com">
                    <div class="card-body">
                        <div class="icon-box-media text-primary rounded-circle shadow-sm mb-3"><i class="fi-mail"></i></div><span class="d-block mb-1 text-body">ارسال ایمیل</span>
                        <h3 class="h5 icon-box-title mb-0 opacity-90">aryazdh@gmail.com</h3>
                    </div></a></div>
            <!-- Item-->
            <div class="col-md-4"><a class="icon-box card card-hover h-100" href="tel:+989145433701">
                    <div class="card-body">
                        <div class="icon-box-media text-primary rounded-circle shadow-sm mb-3"><i class="fi-device-mobile"></i></div><span class="d-block mb-1 text-body">تماس </span>
                        <h3 class="h5 icon-box-title mb-0 opacity-90 ltr">+989145433701</h3>
                    </div></a></div>
            <!-- Item-->
            <div class="col-md-4"><a class="icon-box card card-hover h-100" href="#">
                    <div class="card-body">
                        <div class="icon-box-media text-primary rounded-circle shadow-sm mb-3"><i class="fi-telegram"></i></div><span class="d-block mb-1 text-body">تلگرام</span>
                        <h3 class="h5 icon-box-title mb-0 opacity-90 ltr">@Arya_Azadeh</h3>
                    </div></a></div>
        </div>
    </section>
@endsection
