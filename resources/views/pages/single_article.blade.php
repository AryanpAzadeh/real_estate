@extends('layouts.master')

@section('content')
    <div class="container mt-5 mb-md-4 py-5">
        <!-- Breadcrumb-->
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('pages.index')}}">خانه</a></li>
                <li class="breadcrumb-item"><a href="{{route('pages.articles')}}">وبلاگ</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$article->title}}</li>
            </ol>
        </nav>
        <!-- Post title + meta--><a class="nav-link d-inline-block fw-normal text-uppercase px-0 mb-2" href="#">{{$article->category->name}}</a>
        <h1 class="h2 mb-4 font-vazir">{{$article->title}}</h1>
        <div class="mb-4 pb-1">
            <ul class="list-unstyled d-flex flex-wrap mb-0 text-nowrap">
                <li class="me-3"><i class="fi-calendar-alt me-2 mt-n1 opacity-60"></i>{{verta($article->created_at)->format('Y-m-d')}}</li>
            </ul>
        </div>
        <!-- Post content-->
        <div class="mb-4 pb-md-3"><img class="rounded-3" src="{{asset('/storage/article_images/' . $article->image)}}" alt="Post image"></div>
        <div class="row">
            <div class="col-lg-2 col-md-1 mb-md-0 mb-4 mt-md-n5">
                <!-- Sharing-->
                <div class="sticky-top py-md-5 mt-md-5">
                    <div class="d-flex flex-md-column align-items-center my-2 mt-md-4 pt-md-5">
                        <div class="d-md-none fw-bold text-nowrap me-2 pe-1">اشتراک گذاری</div><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle mb-md-2 me-md-0 me-2" href="#" data-bs-toggle="tooltip" title="Share with Facebook"><i class="fi-facebook"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle mb-md-2 me-md-0 me-2" href="#" data-bs-toggle="tooltip" title="Share with Twitter"><i class="fi-twitter"></i></a><a class="btn btn-icon btn-light-primary btn-xs shadow-sm rounded-circle mb-md-2 me-md-0 me-2" href="#" data-bs-toggle="tooltip" title="Share with LinkedIn"><i class="fi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-10">
                <!-- Post content-->
                {!! $article->body !!}


            </div>
        </div>

    </div>
@endsection
