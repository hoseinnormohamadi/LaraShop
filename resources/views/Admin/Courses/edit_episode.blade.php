@extends('Admin.layout')
@section('header')
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            skin: 'oxide-dark',
            content_css: 'dark'
        });
        </script>
        @endsection
@section('content')
    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">فرم های پایه</h2>
                    <div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">اجزاء</a></li>
                            <li class="breadcrumb-item active">فرم های پایه</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row flex-row">
            <div class="col-12">
                <!-- Form -->
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center">
                        <h4>همه عناصر</h4>
                    </div>
                    <div class="widget-body">
                        <form class="form-horizontal" method="post" action="/Admin/Courses/{{$content->course_id}}/edit/{{$content->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="form-group row d-flex align-items-center mb-5 ">
                                <label
                                    class="col-lg-3 form-control-label @error('title')  text-danger @enderror">تیتر</label>
                                <div class="col-lg-9">
                                    <input type="text" id="title" name="title" value="{{$content->title}}"
                                           class="form-control @error('title')  border border-danger @enderror">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5 ">
                                <label
                                    class="col-lg-3 form-control-label @error('body')  text-danger @enderror">بدنه</label>
                                <div class="col-lg-9">
                                    <textarea class="form-control @error('body')  border border-danger @enderror"
                                              name="body" id="mytextarea" rows="15">
                                        {!!$content->body!!}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5 ">
                                <label
                                    class="col-lg-3 form-control-label @error('VideoUrl')  text-danger @enderror">لینک ویدیو</label>
                                <div class="col-lg-9">
                                    <input type="text" id="title" name="VideoUrl" value="{{$content->videoUrl}}"
                                           class="form-control @error('VideoUrl')  border border-danger @enderror">
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-gradient-03 mr-1 mb-2">ارسال</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Form -->
            </div>
        </div>
        <!-- End Row -->
    </div>
    @endsection
