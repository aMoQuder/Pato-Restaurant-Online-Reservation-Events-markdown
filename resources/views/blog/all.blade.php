@extends('layouts.DashboardApp')

@section('content')
    @include('temp.navbarDashboard')


    {{-- -----------------------start code ------------------------- --}}


    @if (session('massege'))
    <h4 class="alert alert-success text-center">{{ session('massege') }}</h4>
@endif



    <!-- ========== notification-wrapper start ========== -->
    <div class="notification-wrapper">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>All blog</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#0">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        blogs
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <div class="card-style">
                @foreach ($blogs as $blog )


                <div class="single-notification">

                    <div class="notification">
                        <div class=" mx-3 p-2">
                            <img src="{{asset('blog/img/'.$blog->image)}}" class="w-100 "  style="height: 170px;" alt="">
                        </div>
                        <a href="#0" class="content">
                            <h6>   {{$blog->title}}</h6>
                            <p class="text-sm text-gray mb-2">
                               {{$blog->description}}
                            </p>

                        </a>
                    </div>
                    <div class="action">
                        <a href="{{route('deletblog',$blog->id)}}" class="delete-btn">
                            <i class="lni lni-trash-can"></i>
                        </a>
                        <a href="{{route('updateblog',$blog->id)}}" class="delete-btn">
                            <i class="lni lni-pencil"></i>
                        </a>

                    </div>
                </div>
                @endforeach
                <!-- end single notification -->
            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- ========== notification-wrapper start ========== -->

    {{-- -----------------------end code ------------------------- --}}


    @include('temp.footerdashboard')
@endsection
