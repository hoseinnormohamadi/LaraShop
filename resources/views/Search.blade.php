@extends('layout')
@section('content')
    <div class="category-content-area search-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">


                </div>
                <div class="col-lg-9">
                    <div class="right-content-area"><!-- right content area -->

                        <div class="bottom-content"><!-- top content -->
                            <div class="row">
                                @foreach($content as $course)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-new-collection-item"><!-- single new collections -->
                                        <div class="thumb">
                                            <img src="{{$course->image}}" style="width: auto;height: 200px;" alt="new collcetion image">
                                            <div class="hover">
                                                <a href="/Details/{{$course->id}}" target="_blank" class="">مشاهده</a>
                                            </div>
                                        </div>
                                        <div class="content">
                                            @foreach($course->tag as $tag)
                                                @if($tag == null)
                                                    <span class="category">دسته بندی نشده</span>
                                                @endif
                                                <span class="category">{{$tag->name}}</span>
                                            @endforeach
                                            <a href="product-details.html"><h4 class="title">{{$course->title}}</h4></a>
                                            <div class="price"><span class="sprice">{{$course->price}} تومان</span> </div>
                                        </div>
                                    </div><!-- //. single new collections  -->
                                </div>
                                    @endforeach
                            </div>
                        </div><!-- //.top content -->
                    </div><!-- //. right content area -->
                </div>
            </div>
        </div>
    </div>

@endsection
