@extends('layout')
@section('Shop')
    <div class="promotional-product-showcase home-two">
        <div class="container-fluid">
            <div class="row">
                @foreach($content as $ShopItem)
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="single-new-collection-item"><!-- single new collections -->
                        <div class="thumb">
                            <img src="{{$ShopItem->image}}" style="width: auto;height: 200px;" alt="new collcetion image">
                            <div class="hover">
                                <a href="#" class="addtocart">افزودن به سبد</a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="category">کفش ورزشی</span>
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
