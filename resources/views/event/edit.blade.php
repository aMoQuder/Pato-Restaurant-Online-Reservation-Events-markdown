@extends('layouts.DashboardApp')

@section('content')
    @include('temp.navbarDashboard')


    {{-- -----------------------start code ------------------------- --}}


    <!-- ========== tab components start ========== -->
    <section class="tab-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Form Elements</h2>
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
                                    <li class="breadcrumb-item"><a href="#0">Forms</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Form Elements
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

            <!-- ========== form-elements-wrapper start ========== -->
            <div class="form-elements-wrapper">
                <div class="row">

                    @if (session('massege'))
                        <h4 class="alert alert-success text-center">{{ session('massege') }}</h4>
                    @endif
                    <div class="col-lg-12">
                        <form action="{{ route('events.save') }}" method="post" enctype="multipart/form-data">

                            @csrf
                            <input type="hidden" name="old_id" value="{{ $event->id }}">
                            <input type="hidden" name="old_description" value="{{ $event->description }}">
                            <input type="hidden" name="old_img" value="{{ $event->image }}">
                            <!-- input style start -->
                            <div class="card-style mb-30">
                                <h6 class="mb-25">Input Fields</h6>

                                <div class="input-style-1">
                                    <label>Title</label>
                                    <input type="title"  name="title" value="{{$event->title}}" />
                                </div>

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="input-style-1">
                                            <label>date</label>
                                            <input type="date"  name="date" value="{{$event->date}}"/>
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="input-style-2">
                                            <label>time</label>

                                            <input type="time"  name="time" value="{{$event->time}}"  />
                                        </div>

                                    </div>
                                </div>
                                <!-- end input -->


                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="input-style-1">
                                            <label>Message</label>
                                            <textarea placeholder="{{$event->description}}" name="description" rows="5"></textarea>
                                        </div>

                                        <div class="input-style-2">


                                            <input type="file" name="image"  id="updateImage"
                                            onchange=" previewFile()"
                                            accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                            multiple />                                        </div>


                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-style-1">

                                            <label>image event</label>

                                            <img src="{{asset('Event/img/'.$event->image)}}" class="w-100 " id="image_preview" style="height: 220px;" alt="">
                                        </div>

                                    </div>
                                </div>

                                <div class="input-style-2">


                                    <input type="submit" class="btn btn-primary btn-block" />
                                </div>
                            </div>
                            <!-- end card -->
                            <!-- ======= input style end ======= -->
                        </form>

                    </div>
                    <!-- end col -->

                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== form-elements-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== tab components end ========== -->





    {{-- -----------------------end code ------------------------- --}}


    @include('temp.footerdashboard')
@endsection
