@extends('layouts.master')

@section('content')
    <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
        <!-- Breadcrumb-->
        <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('consultant.home')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">املاک من</li>
            </ol>
        </nav>
        <!-- Page content-->
        <div class="row">
            <!-- Sidebar-->
            @include('layouts.consultant.side_menu' , compact('consultant'))
            <!-- Content-->
            <div class="col-lg-8 col-md-7 mb-5">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h1 class="h2 mb-0">املاک من</h1>
                </div>
                <p class="pt-1 mb-4">در اینجا می توانید پیشنهادات ملک خود را مشاهده کرده و به راحتی آنها را ویرایش کنید.</p>
                <!-- Nav tabs-->
                <ul class="nav nav-tabs border-bottom mb-4" role="tablist">
{{--                    <li class="nav-item mb-3"><a class="nav-link active" href="#" role="tab" aria-selected="true"><i class="fi-file fs-base me-2"></i>منتشر شده</a></li>--}}
                    {{--                    <li class="nav-item mb-3"><a class="nav-link" href="#" role="tab" aria-selected="false"><i class="fi-file-clean fs-base me-2"></i>پیش نویس</a></li>--}}
                    {{--                    <li class="nav-item mb-3"><a class="nav-link" href="#" role="tab" aria-selected="false"><i class="fi-archive fs-base me-2"></i>آرشیو</a></li>--}}
                </ul>
                <!-- Item-->
                @foreach($estates as $estate)
                    <div class="card card-hover card-horizontal border-0 shadow-sm mb-4"><a class="card-img-top" href="{{route('pages.single_estate' , $estate->code)}}" style="background-image: url('{{asset('/storage/estate_images/' . $estate->id . '/' . $estate->images()->first()->image)}}');">
                            <div class="position-absolute start-0 top-0 pt-3 pe-3"></div></a>
                        <div class="card-body position-relative pb-3">
                            <h4 class="mb-1 fs-sm fw-normal text-uppercase text-primary">{{$estate->type->name}}</h4>
                            <h3 class="h6 mb-2 fs-base"><a class="nav-link" href="{{route('pages.single_estate' , $estate->code)}}">{{$estate->title}}</a></h3>
                            <p class="mb-2 fs-sm text-muted">{{$estate->zone->name . ', ' . $estate->city->name}}</p>
                            <div><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>{{$estate->price . ', ' . $estate->price_type}}</div>
                            <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 text-nowrap">
                                <a href="{{route('consultant.estate_request' , $estate->id)}}">مشاهده درخواست های بازدید</a></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
