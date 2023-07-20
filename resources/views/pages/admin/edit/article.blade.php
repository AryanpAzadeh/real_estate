@extends('layouts.admin.master')
@section('title' , 'ویرایش')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{\Illuminate\Support\Facades\URL::asset('/admin/assets/vendors/css/forms/select/select2.min.css')}}">
    <script src="https://cdn.tiny.cloud/1/9njwd67ym0oy1io26pq5lc67g5zal48do214cjf8afan4l27/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1">صفحه وبلاگ</h5>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}"><i
                                                class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{route('admin.article')}}">مقالات من</a>
                                    </li>
                                    <li class="breadcrumb-item active">ویرایش
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic Inputs Groups start -->
                <section id="basic-input-groups">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">ویرایش : {{$article->title}}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{route('article.update' , $article->id)}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h6>عنوان</h6>
                                                    <fieldset class="form-group position-relative has-icon-left">
                                                        <input type="text" name="title" class="form-control" id="iconLeft1"
                                                               placeholder="عنوان مقاله شما" required  oninvalid="setCustomValidity('لطفا عنوان را وارد کنید.')"
                                                               onkeyup="setCustomValidity('')" value="{{$article->title}}">
                                                        <div class="form-control-position">
                                                            <i class="bx bx-pencil"></i>
                                                        </div>
                                                    </fieldset>
                                                </div>

                                                <div class="col-sm-6">
                                                    <h6>دسته بندی</h6>
                                                    <div class="form-group">
                                                        <select class="select2 form-control" name="category_id" required>
                                                            @foreach(\App\Models\Category::all() as $category)
                                                                <option value="{{$category->id}}" {{$article->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">

                                                    <div id="full-wrapper">
                                                        <div id="full-container">
                                                            <textarea name="body" class="text-right" id="editor"
                                                                      cols="20"
                                                                      rows="20">{!! $article->body !!}</textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="col-sm-6">
                                                    <br>
                                                    <h6>تصویر</h6>
                                                    <fieldset>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="inputGroupFileAddon01">آپلود</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" name="image" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                                                <label class="custom-file-label" for="inputGroupFile01">انتخاب فایل</label>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h6>&nbsp;</h6>
                                                    <br>
                                                    <button type="submit"
                                                            class="btn btn-primary mr-1 mb-1 float-right">
                                                        <i class="bx bx-check"></i>
                                                        <span class="ml-25">ثبت اطلاعات</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Inputs Groups end -->



            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('script')

    <script src="{{\Illuminate\Support\Facades\URL::asset('/admin/assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{\Illuminate\Support\Facades\URL::asset('/admin/assets/js/scripts/forms/select/form-select2.js')}}"></script>

    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak emoticons directionality',
            toolbar_mode: 'floating',
            directionality: "rtl"
        });
    </script>

@endsection
