@extends('layouts.master')

@section('content')
    <div class="container pt-5 pb-lg-4 mt-5 mb-sm-2">
        <!-- Breadcrumb-->
        <nav class="mb-4 pt-md-3" aria-label="Breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('consultant.home')}}">خانه</a></li>
                <li class="breadcrumb-item"><a href="#">درخواست ها</a></li>
            </ol>
        </nav>
        <!-- Page content-->
        <div class="row">
            <!-- Sidebar-->
            @include('layouts.consultant.side_menu' , $consultant)
            <!-- Content-->
            <div class="col-lg-8 col-md-7 mb-5">
                <h1 class="h2">درخواست های آگهی : {{$estate->title}}</h1>
                <!-- Nav tabs-->
                <ul class="nav nav-tabs flex-column flex-sm-row align-items-stretch align-items-sm-start border-bottom mb-4" role="tablist">
                    <li class="nav-item ms-sm-3 mb-3"><a class="nav-link text-center active" href="#list" data-bs-toggle="tab" role="tab" aria-controls="reviews-about-you" aria-selected="true">لیست</a></li>

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
                        @foreach($requests as $request)
                            <div class="mb-4 pb-4 border-bottom">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="d-flex align-items-center ps-2">
                                        <div class="pe-2">
                                            <h6 class="fs-base mb-0">{{$request->user->name}} | شماره تماس : <a
                                                    href="tel:{{$request->user->phone}}">{{$request->user->phone}}</a></h6>
                                            <p class="fs-base mb-0">{{$request->description}}</p>
                                            @if($request->consultant_message)
                                                <p class="fs-base mb-0">پاسخ شما : {{$request->consultant_message}}</p>

                                            @endif
                                        </div>
                                    </div><span class="text-muted fs-sm">تاریخ ثبت : {{verta($request->created_at)->format('d-m-Y')}}</span>
                                </div>
                                <div class="d-flex align-items-center">

                                    @if($request->status == 0)
                                        <div class="col-md-12">
                                           <div class="row">
                                               <form action="{{route('consultant.replay_request' , $request->id)}}" method="post">
                                                   @csrf
                                                   @method('PUT')
                                                   <input class="form-control" type="text" id="ap-title" placeholder="پاسخ شما"  name="consultant_message" required>
                                                   <button type="submit" class="btn btn-primary btn-sm d-block mb-2 mt-2" href="real-estate-property-promotion.html">ارسال</button>
                                               </form>
                                           </div>
                                        </div>
{{--                                        <a  class="btn btn-dislike" href="{{route('consultant.mark_status' , $request->id)}}"><i class="fi-x"></i><span>بررسی نشده</span></a>--}}
                                    @else
                                        <span class="text-success"><i class="fi-check"></i><span> بررسی شده </span>

                                    @endif


                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
