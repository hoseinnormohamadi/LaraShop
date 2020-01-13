@extends('Admin.layout')
@section('content')

    <div class="container-fluid">
        <!-- Begin Page Header-->
        <div class="row">
            <div class="page-header">
                <div class="d-flex align-items-center">
                    <h2 class="page-header-title">مدیریت پست ها</h2>
                </div>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row flex-row">
            <div class="col-12">
                <!-- Form -->
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center">
                        <h4>پست ها</h4>
                    </div>
                    <div class="widget-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>شماره پست</th>
                                    <th>نام پست</th>
                                    <th>خلاصه پست</th>
                                    <th>تاریخ ارسال</th>
                                    <th>تنظیمات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($content as $course)
                                    <tr>
                                        <td><span class="text-primary">{{$course->id}}</span></td>
                                        <td>{{$course->title}}</td>
                                        <td>{{$course->summary}}</td>
                                        <td>{{$course->created_at}}</td>
                                        <td class="td-actions">
                                            <a href="/Admin/Courses/{{$course->id}}" target="_blank"><i class="la la-arrows edit"></i></a>
                                            <a href="/Admin/Courses/{{$course->id}}/edit"><i class="la la-edit edit"></i></a>
                                            <a href="/Posts/{{$course->id}}/Delete"><i class="la la-close delete"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <p>no post with tag</p>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- End Form -->
            </div>
        </div>
        <!-- End Row -->
    </div>
@endsection
