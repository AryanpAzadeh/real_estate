@extends('layouts.master')

@section('content')
    <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
        <!-- Breadcrumb-->
        <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('user.home')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">اطلاعات حساب کاربری</li>
            </ol>
        </nav>
        <!-- Page content-->
        <div class="row">
            <!-- Sidebar-->
            @include('layouts.user.side_menu' , $user)
            <!-- Content-->
            <div class="col-lg-8 col-md-7 mb-5 account">
                <h1 class="h2">درخواست های بازدید شما</h1>
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
                        @foreach($requests as $request)
                        <div class="card card-hover card-horizontal border-0 shadow-sm mb-4"><a class="card-img-top" href="{{route('pages.single_estate' , $request->estate->code)}}" style="background-image: url('{{asset('/storage/estate_images/' . $request->estate->id . '/' . $request->estate->images()->first()->image)}}');">
                                <div class="position-absolute start-0 top-0 pt-3 pe-3"></div></a>
                            <div class="card-body position-relative pb-3">
                                <h4 class="mb-1 fs-sm fw-normal text-uppercase text-primary">{{$request->estate->type->name}}</h4>
                                <h3 class="h6 mb-2 fs-base"><a class="nav-link" href="{{route('pages.single_estate' , $request->estate->code)}}">{{$request->estate->title}}</a></h3>
                                <p class="mb-2 fs-sm text-muted">{{$request->estate->zone->name . ', ' . $request->estate->city->name}}</p>
                                <div><i class="fi-cash mt-n1 me-2 lead align-middle opacity-70"></i>{{number_format($request->estate->price) . ' - ' . $request->estate->price_type}}</div>
                                <div class="d-flex align-items-center justify-content-center justify-content-sm-start border-top pt-3 pb-2 mt-3 ">
                                    @if($request->status == 0)
                                        <span class="text-danger">در انتظار بررسی</span>
                                    @else
                                        <span class="text-success me-2">بررسی شده توسط مشاور</span>
                                        <br>
                                        <span class="text-dark">{{$request->consultant_message}}</span>

                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach


                </div>

                <!-- Socials-->



            </div>
        </div>
    </div>
@endsection
