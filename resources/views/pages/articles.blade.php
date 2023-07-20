@extends('layouts.master')

@section('content')
    <div class="container mt-5 mb-md-4 py-5">
        <!-- Breadcrumb + page title-->
        <nav class="mb-3 pt-md-3" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('pages.index')}}">خانه</a></li>
                <li class="breadcrumb-item active" aria-current="page">مقالات</li>
            </ol>
        </nav>
        <h1 class="h3 d-flex align-items-end justify-content-between mb-4 font-vazir">اخبار املاک</h1>

        <!-- Articles grid-->
        <div class="row row-cols-md-2 row-cols-1 gy-md-5 gy-4 mb-lg-5 mb-4 blog-list">
            <!-- Article-->
            @foreach($articles as $article)
                <article class="col pb-2 pb-md-1"><a class="d-block position-relative mb-3" href="{{route('pages.single_article' , $article->slug)}}"><img class="d-block rounded-3" src="{{asset('/storage/article_images/' . $article->image)}}" alt="{{$article->title}}"></a><a class="fs-sm text-uppercase text-decoration-none" href="#">{{$article->category->name}}</a>
                    <h3 class="h5 mb-2 pt-1"><a class="nav-link" href="{{route('pages.single_article' , $article->slug)}}">{{$article->title}}</a></h3>
                        <div class="pe-2">

                            <div class="d-flex text-body fs-sm"><span class="me-2 pe-1"><i class="fi-calendar-alt opacity-70 mt-n1 ms-1 align-middle"></i>{{verta($article->created_at)->format('Y-m-d')}}</span></div>
                        </div>
                </article>
            @endforeach

        </div>
        <!-- Pagination-->
       {{$articles->links()}}
    </div>
@endsection
