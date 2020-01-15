@extends('Admin.layout')
@section('content')
    {{--                <div class="row flex-row">
                    <!-- Begin Facebook -->
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="ion-social-facebook text-facebook"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-facebook">Morteza Rezaei</div>
                                        <div class="number">1,865 لایک</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Facebook -->
                    <!-- Begin Twitter -->
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="ion-social-twitter text-twitter"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-twitter">@mt.rezaei</div>
                                        <div class="number">1,986 دنبال کننده</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Twitter -->
                    <!-- Begin Linkedin -->
                    <div class="col-xl-4 col-md-6 col-sm-6">
                        <div class="widget widget-12 has-shadow">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-5 mr-5">
                                        <i class="ti-instagram text-instagram"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title text-instagram">@mt.rezaei_</div>
                                        <div class="number">1,654 دنبال کننده</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Linkedin -->
                </div>
                <!-- End Row -->
                <!-- Begin Row -->
                <div class="row flex-row">
                    <div class="col-xl-12 col-md-6">
                        <!-- Begin Widget 09 -->
                        <div class="widget widget-09 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header d-flex align-items-center">
                                <h2>سفارشات تحویل شده</h2>
                                <div class="widget-options">
                                    <button type="button" class="btn btn-shadow">مشاهده همه</button>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body">
                                <div class="row">
                                    <div class="col-xl-10 col-12 no-padding">
                                        <div>
                                            <canvas id="orders"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-12 d-flex flex-column my-auto no-padding text-center">
                                        <div class="new-orders">
                                            <div class="title">سفارشات جدید</div>
                                            <div class="circle-orders">
                                                <div class="percent-orders"></div>
                                            </div>
                                        </div>
                                        <div class="some-stats mt-5">
                                            <div class="title">مجموع تحویل داده شده</div>
                                            <div class="number text-blue">556</div>
                                        </div>
                                        <div class="some-stats mt-3">
                                            <div class="title">مجموع برآورد شده</div>
                                            <div class="number text-blue">197</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Widget 09 -->
                    </div>
                </div>
                <!-- End Row -->
                <!-- Begin Row -->
                <div class="row flex-row">
                    <div class="col-xl-4 col-md-6">
                        <!-- Begin Widget 04 -->
                        <div class="widget widget-04 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>پست</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-check"></i>پست معتبر
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>ویرایش ابزارک
                                            </a>
                                            <a href="faq.html" class="dropdown-item faq">
                                                <i class="la la-question-circle"></i>پرسش و پاسخ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body p-0">
                                <div class="post-container">
                                    <div class="media mb-3">
                                        <div class="media-left align-self-center user">
                                            <a href="pages-profile.html"><img src="img/avatar/avatar-01.jpg" class="rounded-circle" alt="..."></a>
                                        </div>
                                        <div class="media-body align-self-center ml-3">
                                            <div class="title">
                                                <span class="username">طاهر خان</span> یک تصویر ارسال کرد
                                            </div>
                                            <div class="time">42 دقیقه قبل</div>
                                        </div>
                                    </div>
                                    <img src="img/background/01.jpg" alt="..." class="img-fluid">
                                    <div class="col no-padding d-flex justify-content-end mt-3">
                                        <div class="meta">
                                            <ul>
                                                <li><a href="#"><i class="la la-comment"></i><span class="numb">38</span></a></li>
                                                <li><a href="#"><i class="la la-heart"></i><span class="numb">94</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Begin Write Comment -->
                                <div class="input-group mt-5">
                                    <input type="text" class="form-control pr-0" placeholder="نظر خود را بنویسید...">
                                    <span class="input-group-addon">
                                                <button class="btn" type="button">
                                                    <i class="la la-smile-o la-2x"></i>
                                                </button>
                                            </span>
                                    <span class="input-group-addon">
                                                <button class="btn pr-3" type="button">
                                                    <i class="la la-pencil la-2x"></i>
                                                </button>
                                            </span>
                                </div>
                                <!-- End Write Comment -->
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 04 -->
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <!-- Begin Widget 05 -->
                        <div class="widget widget-05 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>نویسنده های برتر</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>ویرایش ابزارک
                                            </a>
                                            <a href="#" class="dropdown-item faq">
                                                <i class="la la-question-circle"></i>پرسش و پاسخ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body no-padding hidden">
                                <div class="author-avatar">
                                    <span class="badge-pulse-green"></span>
                                    <img src="img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle">
                                </div>
                                <div class="author-name">
                                    طاهر خان
                                    <span>طراح گرافیک</span>
                                </div>
                                <div class="chart">
                                    <div class="row no-margin justify-content-center">
                                        <div class="col-12 col-xl-8 col-md-8 col-sm-8">
                                            <div class="row no-margin align-items-center">
                                                <!-- Begin Chart -->
                                                <div class="col-9 no-padding">
                                                    <div class="chart-graph">
                                                        <div class="chart">
                                                            <canvas id="sales-stats"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 no-padding text-center">
                                                    <div class="chart-text">
                                                        <span class="heading">فروش ها</span>
                                                        <span class="number">564</span>
                                                        <span class="cxg text-green">+35%</span>
                                                    </div>
                                                </div>
                                                <!-- End Chart -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="social-stats">
                                    <div class="row d-flex justify-content-between">
                                        <div class="col-4 text-center">
                                            <i class="la la-users followers"></i>
                                            <div class="counter">+124</div>
                                            <div class="heading">دنبال کننده</div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <i class="la la-dribbble dribbble"></i>
                                            <div class="counter">+657</div>
                                            <div class="heading">لایک</div>
                                        </div>
                                        <div class="col-4 text-center">
                                            <i class="la la-behance behance"></i>
                                            <div class="counter">+98</div>
                                            <div class="heading">دنبال کننده</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="actions text-center">
                                    <a href="pages-profile.html" class="btn btn-gradient-01">مشاهده پروفایل</a>
                                </div>
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 05 -->
                    </div>
                    <div class="col-xl-4">
                        <!-- Begin Widget 06 -->
                        <div class="widget widget-06 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>نظرات</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>ویرایش ابزارک
                                            </a>
                                            <a href="#" class="dropdown-item faq">
                                                <i class="la la-question-circle"></i>پرسش و پاسخ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body p-0">
                                <div id="list-group" class="widget-scroll" style="max-height:490px;">
                                    <ul class="reviews list-group w-100">
                                        <!-- 01 -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left align-self-start">
                                                    <img src="img/avatar/avatar-01.jpg" class="user-img rounded-circle" alt="...">
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <div class="username">
                                                        <h4>طاهر خان</h4>
                                                    </div>
                                                    <div class="msg">
                                                        <div class="stars">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-half-empty"></i>
                                                        </div>
                                                        <p>
                                                            کار فوق العاده
                                                        </p>
                                                    </div>
                                                    <div class="meta">
                                                        <span class="mr-3">30 دقیقه قبل - 1 پاسخ</span>
                                                        <a href="#">پاسخ</a>
                                                    </div>
                                                </div>
                                                <div class="media-right pr-3 align-self-center">
                                                    <div class="like text-center">
                                                        <i class="ion-heart"></i>
                                                        <span>15</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End 01 -->
                                        <!-- 02 -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left align-self-start">
                                                    <img src="img/avatar/avatar-03.jpg" class="user-img rounded-circle" alt="...">
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <div class="username">
                                                        <h4>طاهر خان</h4>
                                                    </div>
                                                    <div class="msg">
                                                        <div class="stars">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </div>
                                                        <p>
                                                            بسیار زیبا! کارهاتون رو به همین زیبایی ادامه بدین!
                                                        </p>
                                                    </div>
                                                    <div class="meta">
                                                        <span class="mr-3">2 ساعت قبل</span>
                                                        <a href="#">پاسخ</a>
                                                    </div>
                                                </div>
                                                <div class="media-right pr-3 align-self-center">
                                                    <div class="like text-center">
                                                        <i class="ion-heart"></i>
                                                        <span>40</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End 02 -->
                                        <!-- 03 -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left align-self-start">
                                                    <img src="img/avatar/avatar-04.jpg" class="user-img rounded-circle" alt="...">
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <div class="username">
                                                        <h4>طاهر خان طاهر خان</h4>
                                                    </div>
                                                    <div class="msg">
                                                        <div class="stars">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                        </div>
                                                        <p>
                                                            کار خوب! طراحی عالی!
                                                        </p>
                                                    </div>
                                                    <div class="meta">
                                                        <span class="mr-3">4 ساعت قبل</span>
                                                        <a href="#">پاسخ</a>
                                                    </div>
                                                </div>
                                                <div class="media-right pr-3 align-self-center">
                                                    <div class="like text-center">
                                                        <i class="ion-heart"></i>
                                                        <span>32</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End 03 -->
                                        <!-- 04 -->
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left align-self-start">
                                                    <img src="img/avatar/avatar-09.jpg" class="user-img rounded-circle" alt="...">
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <div class="username">
                                                        <h4>مازیار عزیزی</h4>
                                                    </div>
                                                    <div class="msg">
                                                        <div class="stars">
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star"></i>
                                                            <i class="la la-star-half-empty"></i>
                                                        </div>
                                                        <p>
                                                            بسیار عالی! با قدرت ادامه بدید.
                                                        </p>
                                                    </div>
                                                    <div class="meta">
                                                        <span class="mr-3">5 ساعت قبل - 2 پاسخ</span>
                                                        <a href="#">پاسخ</a>
                                                    </div>
                                                </div>
                                                <div class="media-right pr-3 align-self-center">
                                                    <div class="like text-center">
                                                        <i class="ion-heart"></i>
                                                        <span>2</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End 04 -->
                                    </ul>
                                </div>
                                <!-- End List -->
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 06 -->
                    </div>
                </div>
                <!-- End Row -->
                <div class="row flex-row">
                    <div class="col-xl-12">
                        <!-- Begin Widget 07 -->
                        <div class="widget widget-07 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>گزارش محصولات در حال خرید</h2>
                                <div class="widget-options">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-primary ripple">هفتگی</button>
                                        <button type="button" class="btn btn-primary ripple">ماهانه</button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body">
                                <div class="table-responsive table-scroll padding-right-10" style="max-height:520px;">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th>
                                                <div class="styled-checkbox mt-2">
                                                    <input type="checkbox" name="check-all" id="check-all">
                                                    <label for="check-all"></label>
                                                </div>
                                            </th>
                                            <th>شماره سفارش</th>
                                            <th>نام مشتری</th>
                                            <th>کشور</th>
                                            <th>تاریخ خرید</th>
                                            <th><span style="width:100px;">وضعیت</span></th>
                                            <th>مجموع سفارش</th>
                                            <th>تنظیمات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td style="width:5%;">
                                                <div class="styled-checkbox mt-2">
                                                    <input type="checkbox" name="cb1" id="cb1">
                                                    <label for="cb1"></label>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">4554-01-IR</span></td>
                                            <td>طاهر خان</td>
                                            <td>ایران</td>
                                            <td>1397/01/20</td>
                                            <td><span style="width:100px;"><span class="badge-text badge-text-small info">پرداخت شده</span></span></td>
                                            <td>تومان 1,390,000</td>
                                            <td class="td-actions">
                                                <a href="#"><i class="la la-edit edit"></i></a>
                                                <a href="#"><i class="la la-close delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:5%;">
                                                <div class="styled-checkbox mt-2">
                                                    <input type="checkbox" name="cb3" id="cb3">
                                                    <label for="cb3"></label>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">1589-01-IR</span></td>
                                            <td>طاهر خان</td>
                                            <td>ایران</td>
                                            <td>1397/02/10</td>
                                            <td><span style="width:100px;"><span class="badge-text badge-text-small danger">منقضی شده</span></span></td>
                                            <td>تومان 2,490,000</td>
                                            <td class="td-actions">
                                                <a href="#"><i class="la la-edit edit"></i></a>
                                                <a href="#"><i class="la la-close delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:5%;">
                                                <div class="styled-checkbox mt-2">
                                                    <input type="checkbox" name="cb4" id="cb4">
                                                    <label for="cb4"></label>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">2292-06-IR</span></td>
                                            <td>طاهر خان</td>
                                            <td>ایران</td>
                                            <td>1397/03/09</td>
                                            <td><span style="width:100px;"><span class="badge-text badge-text-small success">ارسال شده</span></span></td>
                                            <td>تومان 5,190,000</td>
                                            <td class="td-actions">
                                                <a href="#"><i class="la la-edit edit"></i></a>
                                                <a href="#"><i class="la la-close delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:5%;">
                                                <div class="styled-checkbox mt-2">
                                                    <input type="checkbox" name="cb3" id="cb3">
                                                    <label for="cb3"></label>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">1589-01-IR</span></td>
                                            <td>طاهر خان</td>
                                            <td>ایران</td>
                                            <td>1397/02/10</td>
                                            <td><span style="width:100px;"><span class="badge-text badge-text-small danger">منقضی شده</span></span></td>
                                            <td>تومان 2,490,000</td>
                                            <td class="td-actions">
                                                <a href="#"><i class="la la-edit edit"></i></a>
                                                <a href="#"><i class="la la-close delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:5%;">
                                                <div class="styled-checkbox mt-2">
                                                    <input type="checkbox" name="cb1" id="cb1">
                                                    <label for="cb1"></label>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">4554-01-IR</span></td>
                                            <td>طاهر خان</td>
                                            <td>ایران</td>
                                            <td>1397/01/20</td>
                                            <td><span style="width:100px;"><span class="badge-text badge-text-small info">پرداخت شده</span></span></td>
                                            <td>تومان 1,390,000</td>
                                            <td class="td-actions">
                                                <a href="#"><i class="la la-edit edit"></i></a>
                                                <a href="#"><i class="la la-close delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:5%;">
                                                <div class="styled-checkbox mt-2">
                                                    <input type="checkbox" name="cb4" id="cb4">
                                                    <label for="cb4"></label>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">2292-06-IR</span></td>
                                            <td>طاهر خان</td>
                                            <td>ایران</td>
                                            <td>1397/03/09</td>
                                            <td><span style="width:100px;"><span class="badge-text badge-text-small success">ارسال شده</span></span></td>
                                            <td>تومان 5,190,000</td>
                                            <td class="td-actions">
                                                <a href="#"><i class="la la-edit edit"></i></a>
                                                <a href="#"><i class="la la-close delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:5%;">
                                                <div class="styled-checkbox mt-2">
                                                    <input type="checkbox" name="cb1" id="cb1">
                                                    <label for="cb1"></label>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">4554-01-IR</span></td>
                                            <td>طاهر خان</td>
                                            <td>ایران</td>
                                            <td>1397/01/20</td>
                                            <td><span style="width:100px;"><span class="badge-text badge-text-small info">پرداخت شده</span></span></td>
                                            <td>تومان 1,390,000</td>
                                            <td class="td-actions">
                                                <a href="#"><i class="la la-edit edit"></i></a>
                                                <a href="#"><i class="la la-close delete"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width:5%;">
                                                <div class="styled-checkbox mt-2">
                                                    <input type="checkbox" name="cb3" id="cb3">
                                                    <label for="cb3"></label>
                                                </div>
                                            </td>
                                            <td><span class="text-primary">1589-01-IR</span></td>
                                            <td>طاهر خان</td>
                                            <td>ایران</td>
                                            <td>1397/02/10</td>
                                            <td><span style="width:100px;"><span class="badge-text badge-text-small danger">منقضی شده</span></span></td>
                                            <td>تومان 2,490,000</td>
                                            <td class="td-actions">
                                                <a href="#"><i class="la la-edit edit"></i></a>
                                                <a href="#"><i class="la la-close delete"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- End Widget Body -->
                            <!-- Begin Widget Footer -->
                            <div class="widget-footer d-flex align-items-center">
                                <div class="mr-auto p-2">
                                    <span class="display-items">نمایش 1-30 / 150 نتیجه</span>
                                </div>
                                <div class="p-2">
                                    <nav aria-label="...">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <span class="page-link"><i class="ion-chevron-right"></i></span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active">
                                                <span class="page-link">2<span class="sr-only">(جاری)</span></span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="ion-chevron-left"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- End Widget Footer -->
                        </div>
                        <!-- End Widget 07 -->
                    </div>
                </div>
                <div class="row flex-row">
                    <div class="col-xl-7 col-md-6">
                        <!-- Begin Widget 10 -->
                        <div class="widget widget-10 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>تیکت های پشتیبانی</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-bell-slash"></i>غیر فعال کردن هشدار
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>ویرایش ابزارک
                                            </a>
                                            <a href="#" class="dropdown-item faq">
                                                <i class="la la-question-circle"></i>پرسش و پاسخ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body no-padding">
                                <ul class="ticket list-group w-100">
                                    <!-- 01 -->
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center pr-4">
                                                <img src="img/avatar/avatar-02.jpg" class="user-img rounded-circle" alt="...">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="username">
                                                    <h4>طاهر خان</h4>
                                                </div>
                                                <div class="msg">
                                                    <p>
                                                        سلام، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                                    </p>
                                                </div>
                                                <div class="status"><span class="open mr-2">باز</span>(1 ساعت قبل)</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End 01 -->
                                    <!-- 02 -->
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center pr-4">
                                                <img src="img/avatar/avatar-04.jpg" class="user-img rounded-circle" alt="...">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="username">
                                                    <h4>طاهر خان طاهر خان</h4>
                                                </div>
                                                <div class="msg">
                                                    <p>
                                                        سلام، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                                    </p>
                                                </div>
                                                <div class="status"><span class="pending mr-2">در حال رسیدگی</span>(2 ساعت قبل)</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End 02 -->
                                    <!-- 03 -->
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center pr-4">
                                                <img src="img/avatar/avatar-03.jpg" class="user-img rounded-circle" alt="...">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="username">
                                                    <h4>طاهر خان</h4>
                                                </div>
                                                <div class="msg">
                                                    <p>
                                                        سلام، لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است.
                                                    </p>
                                                </div>
                                                <div class="status"><span class="closed mr-2">بسته شده</span>(1 روز قبل)</div>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- End 03 -->
                                </ul>
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 10 -->
                    </div>
                    <div class="col-xl-5">
                        <!-- Begin Widget 11 -->
                        <div class="widget widget-11 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>گزارش فعالیت</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-history"></i>تاریخ
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-bell-slash"></i>غیرفعال کردن هشدار
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>ویرایش ابزارک
                                            </a>
                                            <a href="#" class="dropdown-item faq">
                                                <i class="la la-question-circle"></i>پرسش و پاسخ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body p-0 widget-scroll" style="max-height:450px;">
                                <!-- Begin 01 -->
                                <div class="timeline violet">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="user-image">
                                            <img class="rounded-circle" src="img/avatar/avatar-06.jpg" alt="...">
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">احسان طاهر خان</span>
                                                درخواست دوستی برای شما ارسال شد.
                                            </div>
                                            <div class="time">4 دقیقه قبل</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 01 -->
                                <!-- Begin 02 -->
                                <div class="timeline red">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="timeline-icon">
                                            <i class="la la-spinner"></i>
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                سرور مجدد راه اندازی شد
                                            </div>
                                            <div class="time">10 دقیقه قبل</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 02 -->
                                <!-- Begin 03 -->
                                <div class="timeline violet">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="user-image">
                                            <img class="rounded-circle" src="img/avatar/avatar-03.jpg" alt="...">
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">طاهر خان</span>
                                                توسط 4 نفر دنبال شده
                                                <div class="users-like">
                                                    <a href="profile.html">
                                                        <img src="img/avatar/avatar-01.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                    <a href="profile.html">
                                                        <img src="img/avatar/avatar-02.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                    <a href="profile.html">
                                                        <img src="img/avatar/avatar-07.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                    <a href="profile.html">
                                                        <img src="img/avatar/avatar-09.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="time">12 دقیقه قبل</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 03 -->
                                <!-- Begin 04 -->
                                <div class="timeline blue">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="timeline-icon">
                                            <i class="la la-heart-o"></i>
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">طاهر خان</span>
                                                لایک <span class="font-weight-bold"><a href="#">پنل مدیریتی بهتام</a></span>
                                            </div>
                                            <div class="time">30 دقیقه قبل</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 04 -->
                                <!-- Begin 05 -->
                                <div class="timeline violet">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="timeline-icon">
                                            <i class="la la-twitter"></i>
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                + 3 فالوور جدید
                                                <div class="users-like">
                                                    <a href="profile.html">
                                                        <img src="img/avatar/avatar-09.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                    <a href="profile.html">
                                                        <img src="img/avatar/avatar-06.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                    <a href="profile.html">
                                                        <img src="img/avatar/avatar-03.jpg" class="img-fluid rounded-circle" alt="...">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="time">34 دقیقه قبل</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 05 -->
                                <!-- Begin 06 -->
                                <div class="timeline violet">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="user-image">
                                            <img class="rounded-circle" src="img/avatar/avatar-04.jpg" alt="...">
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">طاهر خان</span>
                                                شما را به یک گروه دعوت کرده
                                            </div>
                                            <div class="time">42 min ago</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 06 -->
                                <!-- Begin 06 -->
                                <div class="timeline violet">
                                    <div class="timeline-content d-flex align-items-center">
                                        <div class="user-image">
                                            <img class="rounded-circle" src="img/avatar/avatar-03.jpg" alt="...">
                                        </div>
                                        <div class="d-flex flex-column mr-auto">
                                            <div class="title">
                                                <span class="username">مازیار عزیزی</span>
                                                شما را فالوو کرده است
                                            </div>
                                            <div class="time">50 دقیقه قبل</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End 06 -->
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget 11 -->
                    </div>
                </div>
                <!-- End Row -->
                <div class="row no-margin">
                    <div class="col-xl-12">
                        <!-- Begin Widget -->
                        <div class="row widget has-shadow">
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>تقویم</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                افزودن رویداد
                                            </a>
                                            <a href="app-calendar.html" class="dropdown-item">
                                                تقویم پایه
                                            </a>
                                            <a href="app-calendar-list.html" class="dropdown-item">
                                                حالت لیست
                                            </a>
                                            <a href="app-calendar-event.html" class="dropdown-item">
                                                رویداد بیرون
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <!-- Begin Widget Body -->
                            <div class="widget-body">
                                <!-- Begin Calendar -->
                                <div id="demo-calendar"></div>
                                <!-- End Calendar -->
                            </div>
                            <!-- End Widget Body -->
                        </div>
                        <!-- End Widget -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
                <!-- Begin Row -->
                <div class="row flex-row">
                    <!-- Begin Widget 18 -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="widget widget-18 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>جعبه پیامها</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="app-chat.html" class="dropdown-item">
                                                <i class="la la-comments"></i>پیام جدید
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-bell-slash"></i>غیرفعال سازی هشدار ها
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>ویرایش ابزارک
                                            </a>
                                            <a href="#" class="dropdown-item faq">
                                                <i class="la la-question-circle"></i>پرسش و پاسخ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <div class="widget-body">
                                <div class="input-group">
                                            <span class="input-group-addon pr-0 pl-0">
                                                <a class="btn" href="#">
                                                    <i class="la la-search la-2x"></i>
                                                </a>
                                            </span>
                                    <input type="text" class="form-control no-ppading-right no-padding-left" placeholder="Search">
                                </div>
                                <div class="new-message">
                                    <div class="media">
                                        <div class="media-left align-self-center mr-3">
                                            <img src="img/avatar/avatar-04.jpg" alt="..." class="img-fluid rounded-circle" style="width: 50px;">
                                        </div>
                                        <div class="media-body align-self-center">
                                            <div class="new-message-sender">طاهر خان</div>
                                            <div class="new-message-time">پیام جدید در 2 دقیقه قبل</div>
                                        </div>
                                        <div class="media-right align-self-center">
                                            <div class="actions">
                                                <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group w-100 mt-5">
                                    <li class="list-group-item">
                                        <div class="other-message">
                                            <div class="media">
                                                <div class="media-left align-self-center mr-3">
                                                    <img src="img/avatar/avatar-02.jpg" alt="..." class="img-fluid rounded-circle" style="width: 50px;">
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <div class="other-message-sender">طاهر خان</div>
                                                    <div class="other-message-time">شما واقعا برنامه نویس هستید؟ 3 دقیقه قبل</div>
                                                </div>
                                                <div class="media-right align-self-center">
                                                    <div class="actions">
                                                        <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="other-message">
                                            <div class="media">
                                                <div class="media-left align-self-center mr-3">
                                                    <img src="img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle" style="width: 50px;">
                                                </div>
                                                <div class="media-body align-self-center">
                                                    <div class="other-message-sender">طاهر خان طاهر خان</div>
                                                    <div class="other-message-time">من یک فروشنده سخت افزار ورک استیشن هستم - 3 دقیقه قبل</div>
                                                </div>
                                                <div class="media-right align-self-center">
                                                    <div class="actions">
                                                        <a href="app-chat.html"><i class="la la-reply reply"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget 18 -->
                    <!-- Begin Widget 19 -->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="widget widget-19 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>جلسه جدید</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-bell-slash"></i>غیر فعال سازی هشدارها
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>ویرایش ابزارک ها
                                            </a>
                                            <a href="#" class="dropdown-item faq">
                                                <i class="la la-question-circle"></i>پرسش و پاسخ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <div class="widget-body p-0">
                                <div class="form-group row mt-3 mr-0 mb-3 ml-0">
                                    <div class="col-xl-12">
                                        <label class="form-control-label">نام جلسه</label>
                                        <input type="text" value="جلسه من..." class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mr-0 mb-3 ml-0">
                                    <div class="col-xl-8 mb-3">
                                        <label class="form-control-label">تاریخ</label>
                                        <select name="meeting-date" class="custom-select form-control">
                                            <option value="">انتخاب تاریخ</option>
                                            <option value="01">شنبه 1-آذر 97</option>
                                            <option value="02">یکشنبه 2-آذر 97</option>
                                            <option value="03">دوشنبه 3-آذر 97</option>
                                            <option value="04">سشنبه 4-آذر 97</option>
                                            <option value="05">چهارشنبه 5-آذر 97</option>
                                            <option value="07">پنج شنبه 6-آذر 97</option>
                                            <option value="08">جمعه 7-آذر 97</option>
                                            <option value="01">شنبه 8-آذر 97</option>
                                            <option value="02">یکشنبه 9-آذر 97</option>
                                            <option value="03">دوشنبه 10-آذر 97</option>
                                            <option value="04">سشنبه 11-آذر 97</option>
                                            <option value="05">چهارشنبه 12-آذر 97</option>
                                            <option value="07">پنج شنبه 13-آذر 97</option>
                                            <option value="08">جمعه 14-آذر 97</option>
                                            <option value="01">شنبه 15-آذر 97</option>
                                            <option value="02">یکشنبه 16-آذر 97</option>
                                            <option value="03">دوشنبه 17-آذر 97</option>
                                            <option value="04">سشنبه 18-آذر 97</option>
                                            <option value="05">چهارشنبه 19-آذر 97</option>
                                            <option value="07">پنج شنبه 20-آذر 97</option>
                                            <option value="08">جمعه 21-آذر 97</option>
                                            <option value="01">شنبه 22-آذر 97</option>
                                            <option value="02">یکشنبه 23-آذر 97</option>
                                            <option value="03">دوشنبه 24-آذر 97</option>
                                            <option value="04">سشنبه 25-آذر 97</option>
                                            <option value="05">چهارشنبه 26-آذر 97</option>
                                            <option value="07">پنج شنبه 27-آذر 97</option>
                                            <option value="08">جمعه 28-آذر 97</option>
                                            <option value="01">شنبه 29-آذر 97</option>
                                            <option value="02">یکشنبه 30-آذر 97</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-4">
                                        <label class="form-control-label">ساعت</label>
                                        <select name="meeting-hour" class="custom-select form-control">
                                            <option value="">انتخاب ساعت</option>
                                            <option value="01">07:00 صبح</option>
                                            <option value="02">08:00 صبح</option>
                                            <option value="03">09:00 صبح</option>
                                            <option value="04">10:00 صبح</option>
                                            <option value="05">11:00 صبح</option>
                                            <option value="07">12:00 صبح</option>
                                            <option value="08">01:00 صبح</option>
                                            <option value="09">02:00 عصر</option>
                                            <option value="10">03:00 عصر</option>
                                            <option value="08">04:00 عصر</option>
                                            <option value="09">05:00 عصر</option>
                                            <option value="10">06:00 عصر</option>
                                            <option value="08">07:00 عصر</option>
                                            <option value="09">08:00 عصر</option>
                                            <option value="10">09:00 عصر</option>
                                            <option value="08">10:00 عصر</option>
                                            <option value="09">11:00 عصر</option>
                                            <option value="10">12:00 عصر</option>
                                        </select>
                                    </div>
                                </div>
                                <ul class="list-group w-100 widget-scroll" style="max-height:250px;">
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="img/avatar/avatar-02.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="people-name">طاهر خان</div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <div class="checkbox check"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="people-name">طاهر خان</div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <div class="checkbox check"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="img/avatar/avatar-04.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="people-name">طاهر خان طاهر خان</div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <div class="checkbox check"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="img/avatar/avatar-05.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="people-name">طاهر خان</div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <div class="checkbox check"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="img/avatar/avatar-06.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="people-name">مازیار عزیزی</div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <div class="checkbox check"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="img/avatar/avatar-07.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="people-name">مسعود طاهر خانی</div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <div class="checkbox check"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="img/avatar/avatar-08.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="people-name">طاهر خان حیدری</div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <div class="checkbox check"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="media-left align-self-center mr-3">
                                                <img src="img/avatar/avatar-09.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="people-name">جواد اسدی</div>
                                            </div>
                                            <div class="media-right align-self-center">
                                                <div class="checkbox check"></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center mt-4 mb-3">
                                    <button type="button" class="btn btn-gradient-01" data-toggle="modal" data-target="#delay-modal">
                                        ایجاد جلسه
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget 19 -->
                    <!-- Begin Widget 20 -->
                    <div class="col-xl-4">
                        <div class="widget widget-20 has-shadow">
                            <!-- Begin Widget Header -->
                            <div class="widget-header bordered d-flex align-items-center">
                                <h2>فایل ها</h2>
                                <div class="widget-options">
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>مدیریت فایل ها
                                            </a>
                                            <a href="#" class="dropdown-item faq">
                                                <i class="la la-question-circle"></i>پرسش و پاسخ
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Widget Header -->
                            <div class="widget-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="widget20 owl-carousel">
                                            <div class="item">
                                                <div class="card-image">
                                                    <img src="img/background/03.jpg" alt="...">
                                                    <div class="card-overlay card-overlay-01">
                                                        <div class="card-overlay-content">
                                                            <div class="category">
                                                                <a href="#">دسته بندی</a>
                                                            </div>
                                                            <a href="#0" class="card-title">عنوان مجموعه</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card-image">
                                                    <img src="img/background/04.jpg" alt="...">
                                                    <div class="card-overlay card-overlay-02">
                                                        <div class="card-overlay-content">
                                                            <div class="category">
                                                                <a href="#">دسته بندی</a>
                                                            </div>
                                                            <a href="#0" class="card-title">عنوان مجموعه</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card-image">
                                                    <img src="img/background/05.jpg" alt="...">
                                                    <div class="card-overlay card-overlay-01">
                                                        <div class="card-overlay-content">
                                                            <div class="category">
                                                                <a href="#">دسته بندی</a>
                                                            </div>
                                                            <a href="#0" class="card-title">عنوان مجموعه</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="card-image">
                                                    <img src="img/background/02.jpg" alt="...">
                                                    <div class="card-overlay card-overlay-02">
                                                        <div class="card-overlay-content">
                                                            <div class="category">
                                                                <a href="#">دسته بندی</a>
                                                            </div>
                                                            <a href="#0" class="card-title">عنوان مجموعه</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5 mr-0 ml-0">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                        <div class="media w-100">
                                            <div class="align-self-center mr-2">
                                                <i class="la la-file-video-o"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="files-title"><a href="#">ویدئوها</a></div>
                                                <div class="files-number">94 فایل</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                        <div class="media w-100">
                                            <div class="align-self-center mr-2">
                                                <i class="la la-file-audio-o"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="files-title"><a href="#">صداها</a></div>
                                                <div class="files-number">686 فایل</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                        <div class="media w-100">
                                            <div class="align-self-center mr-2">
                                                <i class="la la-file-picture-o"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="files-title"><a href="#">عکس ها</a></div>
                                                <div class="files-number">489 فایل</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                        <div class="media w-100">
                                            <div class="align-self-center mr-2">
                                                <i class="la la-file-zip-o"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="files-title"><a href="#">نمونه ها</a></div>
                                                <div class="files-number">56 فایل</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                        <div class="media w-100">
                                            <div class="align-self-center mr-2">
                                                <i class="la la-file-pdf-o"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="files-title"><a href="#">فایل PDF</a></div>
                                                <div class="files-number">39 فایل</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center mb-4">
                                        <div class="media w-100">
                                            <div class="align-self-center mr-2">
                                                <i class="la la-file-powerpoint-o"></i>
                                            </div>
                                            <div class="media-body align-self-center">
                                                <div class="files-title"><a href="#">ارائه ها</a></div>
                                                <div class="files-number">263 فایل</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Widget 20 -->
                </div>
                <!-- End Row -->--}}


    <h1>
        @auth
            {{'Hi '. auth::user()->name}}
        @endauth
    </h1>

    @endsection
