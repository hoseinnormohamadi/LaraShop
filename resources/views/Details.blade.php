<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> بیگ انیا | قالب فروشگاهی چند منظوره HTML </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- icofont -->
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- select 2  -->
    <link rel="stylesheet" href="/assets/css/select2.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- flaticon -->
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="/assets/css/responsive.css">
</head>

<body>

<!-- support bar area start -->
<div class="support-bar-area bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="right-content-area"><!-- right content area -->
                    <ul>
                        <li>
                            سفارش قبل از 17:30، امروزه حمل می شود
                        </li>
                        <li>
                            <i class="fas fa-truck"></i> حمل رایگان
                        </li>
                        <li>
                            <i class="fas fa-clock"></i> 24/7 پشتیبانی آنلاین
                        </li>
                    </ul>
                </div><!-- //. right content area -->
            </div>
        </div>
    </div>
</div>
<!-- support bar area end -->

<!-- support bar area two start -->
<div class="support-bar-two bg-white home-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="left-content">
                    <a href="index-2.html" class="logo main-logo">
                        <img src="/assets/img/logo-6.png" alt="logo">
                    </a>
                </div>
                <div class="right-content">
                    <ul>
                        <li>
                            <div class="support-search-area">
                                <form action="/searchTag" class="search-form">
                                    <div class="form-element has-icon">
                                        <input type="text" class="input-field" placeholder="کلمه کلیدی را وارد نمایید">
                                        <button type="submit" class="submit-btn"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="single-support-info-item">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">ایمیل ما</h4>
                                    <span class="details">info@examplte.com</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="single-support-info-item">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <h4 class="title">پشتیبانی رایگان</h4>
                                    <span class="details">(012) 800 456 789</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- support bar area two end -->

<!-- navbar area start -->
<nav class="navbar navbar-area navbar-expand-lg navbar-light bg-light-blue home-6">
    <div class="container nav-container">
        <div class="logo-wrapper navbar-brand ">
            <a href="index-2.html" class="logo main-logo mobile-logo">
                <img src="/assets/img/logo-white.png" alt="logo">
            </a>
        </div>
        <div class="collapse navbar-collapse" id="mirex">
            <!-- navbar collapse start -->
            <ul class="navbar-nav">
                <!-- navbar- nav -->
                <li class="nav-item ">
                    <a class="nav-link pl-0" href="/" data-toggle="dropdown">خانه
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">درباره</a>
                </li>
                <li class="nav-item  active">
                    <a class="nav-link " href="#" data-toggle="dropdown">محصولات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">تماس</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">ورود</a>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar btn wrapper -->
        <div class="responsive-mobile-menu">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mirex"
                    aria-controls="mirex"
                    aria-expanded="false" aria-label="تغییر ناوبری">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <!-- navbar collapse end -->
        <div class="right-btn-wrapper">
            <ul>
                <li class="cart" id="cart"><i class="fas fa-shopping-basket"></i>
                    <span class="badge">12</span>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- navbar area end -->

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg extra" style="background-image: url('{{$content->image}}');   background-position: center;
    background-size: contain; }">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-inner"><!-- breadcrumb inner -->
                    <div class="left-content-area"><!-- left content area -->
                        <h1 class="title">جزئیات محصول</h1>
                    </div><!-- //. left content area -->
                    <div class="right-content-area">
                        <ul>
                            <li><a href="/">خانه</a></li>
                            <li>جزئیات محصول</li>
                        </ul>
                    </div>
                </div><!-- //. breadcrumb inner -->
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->
<div class="body-overlay" id="body-overlay"></div>
<!-- slide sidebar area start -->

<!-- slide sidebar area end -->
<!-- cart sidebar area start -->
<div class="cart-sidebar-area" id="cart-sidebar-area">
    <div class="top-content"><!-- top content -->
        <a href="#" class="logo">
            <img src="/assets/img/logo-white.png" alt="logo">
        </a>
        <span class="side-sidebar-close-btn"><i class="fas fa-times"></i></span>
    </div><!-- //. top content -->
    <div class="bottom-content"><!-- bottom content -->
        <div class="cart-products"><!-- cart product -->
            <h4 class="title">سبد خرید</h4>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="/assets/img/recent-review/01.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">کفش تیره</h4>
                    <div class="price"><span class="pprice">350.00 تومان</span>
                        <del class="dprice">500.00 تومان</del>
                    </div>
                    <a href="#" class="remove-cart">حذف</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="/assets/img/recent-review/02.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">میلو هوروبرد</h4>
                    <div class="price"><span class="pprice">350.00 تومان</span>
                        <del class="dprice">500.00 تومان</del>
                    </div>
                    <a href="#" class="remove-cart">حذف</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="/assets/img/recent-review/03.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">کفش پیاده روی</h4>
                    <div class="price"><span class="pprice">350.00 تومان</span>
                        <del class="dprice">500.00 تومان</del>
                    </div>
                    <a href="#" class="remove-cart">حذف</a>
                </div>
            </div>
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="/assets/img/recent-review/04.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">کفش پیاده روی</h4>
                    <div class="price"><span class="pprice">350.00 تومان</span>
                        <del class="dprice">500.00 تومان</del>
                    </div>
                    <a href="#" class="remove-cart">حذف</a>
                </div>
            </div><!-- //. single product item -->
            <div class="single-product-item"><!-- single product item -->
                <div class="thumb">
                    <img src="/assets/img/recent-review/05.jpg" alt="recent review">
                </div>
                <div class="content">
                    <h4 class="title">کفش پیاده روی</h4>
                    <div class="price"><span class="pprice">350.00 تومان</span>
                        <del class="dprice">500.00 تومان</del>
                    </div>
                    <a href="#" class="remove-cart">حذف</a>
                </div>
            </div>
            <div class="btn-wrapper">
                <a href="checkout.html" class="boxed-btn">بررسی و پرداخت</a>
            </div>
        </div> <!-- //. cart product -->
    </div><!-- //. bottom content -->
</div>
<!-- cart sidebar area end -->
<!-- blog details page content area start -->
<section class="blog-details-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-blog-post"><!-- single blog post -->
                    <div class="meta-time"><!-- meta time -->
                        <span class="date">{{$content->created_at->day}}</span>
                        <span class="month">{{date("F", mktime(0,0,0 ,$content->created_at->month,1 ))}}</span>
                    </div><!-- //.meta time -->
                    <div class="details-container"><!-- details contaienr -->
                        <div class="meta-tags"><!-- meta tags -->
                            <ul>
                                <i class="fab fa-microsoft"> تعداد قسمت ها :‌  {{$content->episodes->count()}} </i>
                                <br/>
                                <i class="fas fa-dollar-sign"> قیمت : {{$content->price}}</i>
                            </ul>
                        </div>
                        <div class="post-body"><!-- post body -->
                            <h3 class="title">{{$content->title}}</h3>
                          <p>{!! $content->body !!}</p>
                            <div class="post-bottom-content"><!-- post bottom content -->
                                <div class="top-content"><!-- top content -->
                                    <div class="left-content"><h4 class="title">برچسب های مرتبط</h4></div>
                                </div><!-- //.top content -->
                                <div class="bottom-content"><!-- bottom content -->
                                    <div class="left-content"><!-- left content -->
                                        <ul>
                                            @foreach($content->tag as $tags)
                                            <li><a href="/Search?tag={{$tags->name}}">{{$tags->name}}</a></li>
                                                @endforeach
                                        </ul>
                                    </div><!-- //.left content -->
                                </div>

                            </div><!-- //.bottom content -->
                            </div><!-- //.post bottom content -->
                        </div><!-- //.post body -->
                        <div class="single-post-separator"></div>
                        <div class="comments-area"><!-- comments area satart -->
                            <h3 class="title">نظرات</h3>
                            @foreach($comments as $comment)
                            <div class="single-comment-item margin-bottom-40"><!-- single comment item -->
                                <div class="thumb">
                                    <img src="{{\App\User::find($comment->user_id)->Pic}}" alt="commente avatar">
                                </div>
                                <div class="content">
                                    <span class="meta-date">{{date("F", mktime(0,0,0 ,$comment->created_at->month,1 ))}} {{date("D", mktime(0,0,0 ,0,$content->created_at->day ))}}</span>
                                    <h4 class="author-name">{{\App\User::find($comment->user_id)->name}}</h4>
                                    <p>{{$comment->body}}</p>
                                </div>

                            </div>
                                @endforeach<!-- //. single comment item -->
                        </div><!-- //. comments area end -->

                        <div class="single-blog-page-separator"></div>
                    @auth
                        <div class="comments-form-area"><!-- comments form area -->
                            <h3 class="title">ارسال نظر</h3>
                            <div class="comment-form-wrapper"><!-- comment form wrapper -->
                                <form action="#">

                                    <div class="form-element margin-bottom-20">
                                        <div class="has-icon ">
                                            <input type="text" class="input-field borderd"
                                                   placeholder="نام خود را بنویسید....">
                                            <div class="the-icon">
                                                <i class="fas fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-element margin-bottom-20">
                                        <div class="has-icon ">
                                            <input type="email" class="input-field borderd"
                                                   placeholder="ایمیل خود را بنویسید....">
                                            <div class="the-icon">
                                                <i class="fas fa-envelope"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-element margin-bottom-15">
                                        <div class="has-icon textarea">
                                            <textarea rows="20" cols="8" placeholder="نظرات خود را تایپ کنید...."
                                                      class="input-field borderd textarea"></textarea>
                                            <div class="the-icon">
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-element margin-top-40">
                                        <input type="submit" value="ارسال نظر" class="submit-btn btn-rounded">
                                    </div>
                                </form>
                            </div>
                        </div><!-- comments form area -->
                    @endauth
                    @guest
                        <h4><a href="/login">برای نظر دادن وارد شوید</a></h4>
                        @endguest
                </div>

            </div><!-- //.col-lg-8 -->
        </div><!-- //.row -->
    </div><!-- //.container -->

</section>
<!-- blog details page content area end -->

<!-- footer area one start -->

<!-- footer area one end -->

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="sk-fading-circle">
            <div class="sk-circle1 sk-circle"></div>
            <div class="sk-circle2 sk-circle"></div>
            <div class="sk-circle3 sk-circle"></div>
            <div class="sk-circle4 sk-circle"></div>
            <div class="sk-circle5 sk-circle"></div>
            <div class="sk-circle6 sk-circle"></div>
            <div class="sk-circle7 sk-circle"></div>
            <div class="sk-circle8 sk-circle"></div>
            <div class="sk-circle9 sk-circle"></div>
            <div class="sk-circle10 sk-circle"></div>
            <div class="sk-circle11 sk-circle"></div>
            <div class="sk-circle12 sk-circle"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- back to top start -->
<div class="back-to-top">
    <i class="fas fa-rocket"></i>
</div>
<!-- back to top end -->

<!-- jquery -->
<script src="/assets/js/jquery.js"></script>
<!-- popper -->
<script src="/assets/js/popper.min.js"></script>
<!-- bootstrap -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- way poin js-->
<script src="/assets/js/waypoints.min.js"></script>
<!-- owl carousel -->
<script src="/assets/js/owl.carousel.min.js"></script>
<!-- magnific popup -->
<script src="/assets/js/jquery.magnific-popup.js"></script>
<!-- wow js-->
<script src="/assets/js/wow.min.js"></script>
<!-- counterup js-->
<script src="/assets/js/jquery.counterup.min.js"></script>
<!-- imageloaded -->
<script src="/assets/js/imagesloaded.pkgd.min.js"></script>
<!-- Isotope -->
<script src="/assets/js/isotope.pkgd.min.js"></script>
<!-- countdown -->
<script src="/assets/js/countdown.js"></script>
<!-- select 2 -->
<script src="/assets/js/select2.min.js"></script>
<!-- owl carousel2 thumb -->
<script src="/assets/js/owl.carousel2.thumbs.js"></script>
<!-- main -->
<script src="/assets/js/main.js"></script>
</body>


<!-- Mirrored from rtl-temp.ir/Theme/Bigenja/bigenja/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Jan 2020 14:26:55 GMT -->
</html>
