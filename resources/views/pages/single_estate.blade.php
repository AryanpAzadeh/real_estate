@extends('layouts.master')

@section('content')

    <div class="modal fade" id="request-modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered p-2 my-0 mx-auto" style="max-width: 950px;">
            <div class="modal-content">
                <div class="modal-body px-0 py-2 py-sm-0">
                    <button class="btn-close position-absolute top-0 end-0 mt-3 me-3" type="button" data-bs-dismiss="modal"></button>
                    <div class="row mx-0 align-items-center">
                        <div class="col-md-6 border-end-md p-4 p-sm-5">
                            <h2 class="h3 mb-4 mb-sm-5">درخواست بازدید از<br>{{$estate->title}}</h2><img class="d-block mx-auto rotate-img" src="/img/estate-request.svg" width="344" alt="Illustartion">
                        </div>
                        <div class="col-md-6 px-4 pt-2 pb-4 px-sm-5 pb-sm-5 pt-md-5">
                            <form class="needs-validation" novalidate method="POST" action="{{ route('user.store_request' , $estate->id) }}">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label" for="c-message">متن درخواست</label>
                                    <textarea class="form-control form-control-lg" id="c-message" name="description" rows="4" placeholder="وقت بازدید ایده آل شما، توضیحات درمورد شرایط یا ..." required></textarea>
                                </div>
                                <button class="btn btn-primary btn-lg w-100" type="submit">ارسال درخواست</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Page content-->
    <section class="container mt-5 mb-lg-5 mb-4 pt-5 pb-lg-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('pages.index')}}">خانه</a></li>
                <li class="breadcrumb-item"><a href="{{route('pages.estate')}}">املاک</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$estate->title}}</li>
            </ol>
        </nav>
        <div class="row gy-5 pt-lg-2">
            <div class="col-lg-7">
                <div class="d-flex flex-column">
                    <!-- Carousel with slides count-->
                    <div class="order-lg-1 order-2">
                        <div class="tns-carousel-wrapper">
                            <div class="tns-slides-count text-light"><i class="fi-image fs-lg me-2"></i>
                                <div class="ps-1"><span class="tns-current-slide fs-5 fw-bold"></span><span class="fs-5 fw-bold">/</span><span class="tns-total-slides fs-5 fw-bold"></span></div>
                            </div>
                            <div class="tns-carousel-inner" data-carousel-options="{&quot;navAsThumbnails&quot;: true, &quot;navContainer&quot;: &quot;#thumbnails&quot;, &quot;gutter&quot;: 12, &quot;responsive&quot;: {&quot;0&quot;:{&quot;controls&quot;: false},&quot;500&quot;:{&quot;controls&quot;: true}}}">
                                @foreach($estate->images as $image)
                                    <div><img class="rounded-3" src="{{asset('/storage/estate_images/' . $estate->id . '/' . $image->image)}}" alt="Image"></div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Thumbnails nav-->
                        <ul class="tns-thumbnails mb-4" id="thumbnails">
                           @foreach($estate->images as $image)
                                <li class="tns-thumbnail"><img src="{{asset('/storage/estate_images/' . $estate->id . '/' . $image->image)}}" alt="Thumbnail"></li>
                           @endforeach
                        </ul>
                    </div>
                    <!-- Page title + Features-->
                    <div class="order-lg-2 order-1">
                        <h1 class="h2 mb-2">{{$estate->title}}</h1>
                        <p class="mb-2 pb-1 fs-lg">{{$estate->zone->name . '، ' . $estate->city->name . '، ' . $estate->address}}</p>
                    </div>
                </div>
                <!-- Overview-->
                <h2 class="h5">توضیحات</h2>
                <p class="mb-4 pb-2">{{$estate->description}}</p>
                <!-- Rental agent-->
                <h2 class="h5">{{$estate->agency->name}}</h2>
                <div class="card card-horizontal">
                    <div class="card-img-top bg-position-center-x" style="background-image: url({{asset('/storage/consultant_images/' . $estate->consultant->image)}});"></div>
                    <blockquote class="blockquote card-body p-4">
                        <p class="mb-4">{{$estate->agency->description}}</p>
                        <footer class="d-flex justify-content-between">
                            <div class="pe-3">
                                <h6 class="mb-0">{{$estate->consultant->first_name . ' ' . $estate->consultant->last_name}}</h6>
                                <div class="text-muted fw-normal fs-sm mb-3">نماینده <a href="#">{{$estate->agency->name}}</a></div>
                            </div>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <!-- Sidebar with details-->
            <aside class="col-lg-5">
                <div class="ps-lg-5">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div></div>
                        <div class="text-nowrap">
                            <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button" data-bs-toggle="tooltip" title="نشان کردن"><i class="fi-heart"></i></button>
                            <div class="dropdown d-inline-block" data-bs-toggle="tooltip" title="اشتراک گذاری">
                                <button class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle ms-2 mb-2" type="button" data-bs-toggle="dropdown"><i class="fi-share"></i></button>
                                <div class="dropdown-menu dropdown-menu-end my-1">
                                    <button class="dropdown-item" type="button"><i class="fi-facebook fs-base opacity-75 me-2"></i>فیسبوک</button>
                                    <button class="dropdown-item" type="button"><i class="fi-twitter fs-base opacity-75 me-2"></i>توییتر</button>
                                    <button class="dropdown-item" type="button"><i class="fi-instagram fs-base opacity-75 me-2"></i>اینستاگرام</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="h5 mb-2">{{$estate->category}}</h3>
                    <h2 class="h3 mb-4 pb-2">{{number_format($estate->price)}} تومان<span class="d-inline-block ms-1 fs-base fw-normal text-body">/{{$estate->price_type}}</span></h2>
                    <!-- Property details-->
                    <div class="card border-0 bg-secondary mb-4">
                        <div class="card-body">
                            <h5 class="mb-0 pb-3">مشخصات</h5>
                            <ul class="list-unstyled mt-n2 mb-0">
                                <li class="mt-2 mb-0"><b>نوع: </b>{{$estate->type->name}}</li>
                                <li class="mt-2 mb-0"><b>متراژ (مترمربع): </b>{{$estate->area}} مترمربع</li>
                                <li class="mt-2 mb-0"><b>تعداد اتاق: </b>{{$estate->bedrooms}}</li>
                                <li class="mt-2 mb-0"><b>تعداد سرویس بهداشتی: </b>{{$estate->wc}}</li>
                                <li class="mt-2 mb-0"><b>پارکینگ: </b>{{$estate->parking}}</li>
                                <li class="mt-2 mb-0"><b>حیوانات خانگی: </b>{{$estate->pet == 1 ? 'مجاز' : 'غیرمجاز'}}</li>
                            </ul>
                        </div>
                    </div>
                        @auth()
                            @if(auth()->user()->user_type == 'user')
                                   @if(\App\Models\EstateUserRequest::where([['estate_id' , $estate->id] , ['user_id' , auth()->user()->id]])->count() > 0)
                                <a class="btn btn-lg btn-primary w-100 mb-3" href="#">درخواست شما ارسال شد</a>
                            @else
                                <a class="btn btn-lg btn-primary w-100 mb-3" href="#request-modal" data-bs-toggle="modal">درخواست بازدید از ملک</a>
                                   @endif

                            @endif
                        @endauth
                    <!-- Amenities-->
                    <div class="card border-0 bg-secondary mb-4 mt-4">
                        <div class="card-body">
                            <h5>امکانات رفاهی</h5>
                            <ul class="list-unstyled row row-cols-md-2 row-cols-1 gy-2 mb-0 text-nowrap">
                                @foreach($estate->features as $feature)
                                    <li class="col">{{$feature}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <ul class="d-flex mb-4 list-unstyled fs-sm">
                        <li class="me-3 ps-3">تاریخ انتشار: <b>{{verta($estate->created_at)->format('d-m-Y')}}</b></li></ul>

                </div>
            </aside>
        </div>
    </section>
    <!-- Recently viewed-->
    <section class="container mb-5 pb-2 pb-lg-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h2 class="h3 mb-0">ممکن است دوست داشته باشید</h2>
        </div>
        <div class="tns-carousel-wrapper tns-controls-outside-xxl tns-nav-outside tns-nav-outside-flush mx-n2">
            <div class="tns-carousel-inner row gx-4 mx-0 pt-3 pb-4" data-carousel-options="{&quot;items&quot;: 4, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;992&quot;:{&quot;items&quot;:4}}}">
                <!-- Item-->
                @foreach(\App\Models\Estate::where('id' , '!=' , $estate->id)->inRandomOrder()->take(5)->get() as $es)
                    <div class="col">
                        <div class="card shadow-sm card-hover border-0 h-100">
                            <div class="card-img-top card-img-hover"><a class="img-overlay" href="{{route('pages.single_estate' , $es->code)}}"></a>
                                <img src="{{asset('/storage/estate_images/' . $es->id .'/' . $es->images()->first()->image)}}" alt="{{$es->title}}">
                            </div>
                            <div class="card-body position-relative pb-3">
                                <h4 class="mb-1 fs-sm fw-normal text-uppercase text-primary">{{$es->category}}</h4>
                                <h3 class="h6 mb-2 fs-base"><a class="nav-link stretched-link" href="{{route('pages.single_estate' , $es->code)}}">{{$es->title}}</a></h3>
                                <div><i class="fi-home mt-n1 ms-2 lead align-middle opacity-70"></i> {{$es->agency->name}} </div>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-center mx-3 pt-3 text-nowrap"><span class="d-inline-block mx-1 px-2 fs-sm">{{$es->bedrooms}}<i class="fi-bed me-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">{{$es->wc}}<i class="fi-bath me-1 mt-n1 fs-lg text-muted"></i></span><span class="d-inline-block mx-1 px-2 fs-sm">{{$es->parking}}<i class="fi-car me-1 mt-n1 fs-lg text-muted"></i></span></div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

