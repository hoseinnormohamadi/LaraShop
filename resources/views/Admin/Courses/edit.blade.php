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

        function next() {
            document.getElementById("base-tab-2").className = "nav-link";
            document.getElementById('ProgressBar').style.width = "50%"
            $('#base-tab-2').trigger('click')
        }

        function prev() {
            document.getElementById('ProgressBar').style.width = "25%"
            $('#base-tab-1').trigger('click')
        }

        function finish() {
            document.getElementById("base-tab-3").className = "nav-link";
            document.getElementById('ProgressBar').style.width = "75%";
            var courseName = document.getElementById('title').value;
            var courseprice = document.getElementById('price').value;
            var episodeNumer = document.getElementById('episodes_number').value;
            document.getElementById('courseName').innerText = courseName;
            document.getElementById('coursePrice').innerText = courseprice;
            document.getElementById('courseNumber').innerText = episodeNumer;
            $('#base-tab-3').trigger('click')
        }

        function addepisode(number) {

            for (var i = 0; i < number; i++) {
                //////////////////////////////////////////
                var element = document.createElement("input");
                var label = document.createElement("Label");
                label.innerHTML = "تیتر";
                element.setAttribute("type", "text");
                element.setAttribute("name", "Episode_Title_" + i);
                element.setAttribute("class", "form-control");
                label.setAttribute("class", "col-lg-3 form-control-label ");
                var div = document.getElementById("test");
                div.appendChild(label);
                div.appendChild(element);
                /////////////////////////////////
                var body = document.createElement("textarea");
                var bodylabel = document.createElement("Label");
                bodylabel.innerHTML = "بدنه";
                body.setAttribute("id", "mytextarea");
                body.setAttribute("name", "Episode_Body_" + i);
                body.setAttribute("class", "form-control");
                bodylabel.setAttribute("class", "col-lg-3 form-control-label ");
                var div = document.getElementById("test");
                div.appendChild(bodylabel);
                div.appendChild(body);
            }
            next();
        }
    </script>
@endsection
@section('content')


    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">ویرایش</h2>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="col-xl-12">
            <!-- Basic Tabs -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>ویرایش</h4>
                </div>
                <div class="widget-body sliding-tabs">
                    <div class="progress progress-lg mb-3">
                        <div class="progress-bar bg-info" id="ProgressBar" role="progressbar" style="width: 25%"
                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">روند پیشرفت
                        </div>
                    </div>
                    <ul class="nav nav-tabs" id="example-one" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" id="base-tab-1" data-toggle="tab" href="#tab-1"
                               onclick="document.getElementById('ProgressBar').style.width = '25%'" role="tab"
                               aria-controls="tab-1" aria-selected="true">مشخصات دوره</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link disabled" id="base-tab-2" data-toggle="tab" href="#tab-2"
                               onclick="document.getElementById('ProgressBar').style.width = '50%'" role="tab"
                               aria-controls="tab-2" aria-selected="false">مشخصات قسمت ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" id="base-tab-3" data-toggle="tab" href="#tab-3"
                               onclick="document.getElementById('ProgressBar').style.width = '75%'" role="tab"
                               aria-controls="tab-3" aria-selected="false">بازبینی</a>
                        </li>
                    </ul>
                    <form class="form-horizontal" method="post" action="/Admin/Courses/{{$course->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="tab-content pt-3">
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                                 aria-labelledby="base-tab-1">
                                <div class="widget-body">

                                    <div class="form-group row d-flex align-items-center mb-5 ">
                                        <label
                                            class="col-lg-3 form-control-label @error('title')  text-danger @enderror">تیتر</label>
                                        <div class="col-lg-9">
                                            <input type="text" id="title" name="title" value="{{$course->title}}"
                                                   class="form-control @error('title')  border border-danger @enderror">
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5 ">
                                        <label
                                            class="col-lg-3 form-control-label  @error('price')  text-danger @enderror">قیمت</label>
                                        <div class="col-lg-9">
                                            <input type="number" id="price" name="price" value="{{$course->price}}"
                                                   class="form-control  @error('price')  border border-danger @enderror">
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5 ">
                                        <label
                                            class="col-lg-3 form-control-label  @error('episodes_number')  text-danger @enderror">تعداد
                                            قسمت ها</label>
                                        <div class="col-lg-9">
                                            <input type="number" id="episodes_number" name="episodes_number"
                                                   value="{{ $course->episodes->count()}}"
                                                   class="form-control  @error('episodes_number')  border border-danger @enderror">
                                        </div>
                                    </div>
                                    <div class="form-group row d-flex align-items-center mb-5 ">
                                        <label
                                            class="col-lg-3 form-control-label @error('body')  text-danger @enderror">بدنه</label>
                                        <div class="col-lg-9">
                                    <textarea class="form-control @error('body')  border border-danger @enderror"
                                              name="body" id="mytextarea" rows="15">
                                        {!!$course->body!!}
                                    </textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-5">
                                        <label class="col-lg-3 form-control-label @error('tag')  text-danger @enderror">تگ
                                            ها</label>
                                        <div class="col-lg-9 select mb-3">
                                            <select name="tag[]"
                                                    class="custom-select form-control @error('tag')  border border-danger @enderror"
                                                    multiple>
                                                <option value="یک تگ را انتخاب کنید">یک تگ را انتخاب کنید</option>
                                                @foreach($tags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">عکس</label>
                                        <input type="file" class="form-control-file" name="Pic"
                                               id="exampleFormControlFile1">
                                    </div>
                                    <div class="form-group">
                                        <img src="/{{$course->image}}">
                                    </div>

                                    <div class="form-group">
                                        <button type="button"
                                                onclick="addepisode(document.getElementById('episodes_number').value)"
                                                class="btn btn-gradient-03 mr-1 mb-2">بعدی
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="base-tab-2">
                                <div class="form-group row d-flex align-items-center mb-5 " id="test"></div>
                                <div class="form-group">
                                    <button type="button" onclick="prev()" class="btn btn-gradient-03 mr-1 mb-2">قبلی
                                    </button>
                                </div>
                                <div class="form-group">
                                    <button type="button" onclick="finish()" class="btn btn-gradient-03 mr-1 mb-2">بعدی
                                    </button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="base-tab-3">
                                <div class="widget has-shadow">

                                    <div id="IconRightCollapseOne" class="card-body collapse show"
                                         data-parent="#accordion-icon-right" style="">
                                        <div class="form-group row mb-5">
                                            <div class="col-sm-3 form-control-label d-flex align-items-center">نام
                                                دوره
                                            </div>
                                            <div id="courseName" class="col-sm-8 form-control-plaintext"></div>
                                        </div>
                                        <div class="form-group row mb-5">
                                            <div class="col-sm-3 form-control-label d-flex align-items-center">قیمت
                                            </div>
                                            <div id="coursePrice" class="col-sm-8 form-control-plaintext"></div>
                                        </div>
                                        <div class="form-group row mb-5">
                                            <div class="col-sm-3 form-control-label d-flex align-items-center">تعداد
                                                قسمت ها
                                            </div>
                                            <div id="courseNumber" class="col-sm-8 form-control-plaintext"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-gradient-03 mr-1 mb-2">ارسال</button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!-- End Basic Tabs -->
        </div>

    </div>
@endsection



