@extends('layout')
@section('Shop')
    <!-- header area start -->
    <div class="header-area-two header-bg-2">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-8">
                    <div class="header-inner "><!-- header inner -->
                        <span class="subtitle">بهار - تابستان 1397</span>
                        <h1 class="title">تازه رسیده ها</h1>
                        <p class="wow fadeInDown">آموزش آنلاین و دریافت مدرک معتبر</p>
                        {{--<div class="btn-wrapper">
                            <a href="category.html" class="boxed-btn">مشاهده مجموعه ها</a>
                            <a href="about.html" class="boxed-btn blank">بیشتر بدانید</a>
                        </div>--}}
                    </div><!-- //. header inner -->
                </div>
            </div>
        </div>
    </div>
    <!-- header area end -->

    <!-- protional area one start -->
    <div class="promotional-area-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-promotional-item right-text"><!-- single promotional item  -->
                        <div class="img-wrapper promotional-bg-4">
                            <div class="hover">
                                <span class="subtitle wow fadeIn">لاراول</span>
                                <h3 class="title wow fadeIn">وریمورک محبوب</h3>
                                <div class="btn-wrapper ">
                                    <a href="/Search?tag=laravel" class="boxed-btn blank">مشاهده دوره</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- //.single promotional item  -->
                </div>
                <div class="col-lg-6">
                    <div class="single-promotional-item left-text"><!-- single promotional item  -->
                        <div class="img-wrapper promotional-bg-5">
                            <div class="hover">
                                <span class="subtitle wow fadeIn"> 50 درصد تخفیف</span>
                                <h3 class="title wow fadeIn">دوره های طراحی وب</h3>
                                <div class="btn-wrapper wow fadeIn">
                                    <a href="/Search?tag=web" class="boxed-btn blank">مشاهده دوره ها</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- //.single promotional item  -->
                </div>
            </div>
        </div>
    </div>
    <!-- protional area one end -->

    <div class="promotional-product-showcase home-two">
        <div class="container-fluid">
            <div class="row">
                @foreach($content as $ShopItem)
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="single-new-collection-item"><!-- single new collections -->
                        <div class="thumb">
                            <img src="{{$ShopItem->image}}" style="width: auto;height: 200px;" alt="new collcetion image">
                            <div class="hover">
                                <a href="/Details/{{@$ShopItem->id}}" target="_blank" class="title-bold">مشاهده</a>
                            </div>
                        </div>
                        <div class="content">
                            @foreach($ShopItem->tag as $tag)
                                @if($tag == null)
                                    <span class="category">دسته بندی نشده</span>
                                    @endif
                                <span class="category">{{$tag->name}}</span>
                            @endforeach
                            <a href="product-details.html"><h4 class="title">{{$ShopItem->title}}</h4></a>
                            <div class="price"><span class="sprice">{{$ShopItem->price}} تومان</span> </div>
                        </div>
                    </div><!-- //. single new collections  -->
                </div>
                    @endforeach

            </div>
        </div>
    </div>
    @endsection
