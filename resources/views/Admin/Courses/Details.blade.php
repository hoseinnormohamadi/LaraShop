@extends('Admin.layout')
@section('content')
    <!-- Begin Widget -->
    <div class="widget has-shadow">
        <!-- Begin Widget Header -->

        <!-- End Widget Header -->
        <!-- Begin Widget Body -->
        <div class="widget-body">

            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row post-video">
                        <div class="col-xl-5 col-lg-5 col-sm-5 col-12">
                            <div class="hover-img">
                                <img src="{{$content->image}}" class="img-fluid rounded" alt="...">
                                <br>
                                <br>
                                <p>
                                    @foreach($content->tag as $tag)
                                        <a href="/Admin/Courses?tag={{$tag->name}}"> {{$tag->name}}</a>
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-sm-7 col-12 mt-auto mb-auto">
                         <a href="/detail/{{$content->id}}">   <h3>{{$content->title}}</h3></a>
                            <p>{!! $content->body !!} </p>
                        </div>
                    </div>
                    <p> قیمت :{{$content->price}}</p>

                    <p> تعداد جلسات : {{ $Episodes->count()}}
                    </p>
                    @foreach($Episodes as $episode)
                        <p> جلسه : {{$episode->number}}</p>
                    <a href="/Admin/Courses/{{$content->id}}/edit/{{$episode->id}}">ویرایش</a>
                        <p> موضوع : {{$episode->title}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End Widget Body -->

    </div>
    <!-- End Widget -->



@endsection
