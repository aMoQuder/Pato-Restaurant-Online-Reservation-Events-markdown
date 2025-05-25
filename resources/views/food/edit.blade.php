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
                        <form action="{{ route('savefood') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_id" value="{{ $food->id }}">
                            <input type="hidden" name="old_description" value="{{ $food->description }}">
                            <input type="hidden" name="old_image" value="{{ $food->image }}">
                            <!-- input style start -->
                            <div class="card-style mb-30">
                                <h6 class="mb-25">Input Fields</h6>
                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="input-style-1">
                                            <label>Name</label>
                                            <input type="text" value="{{ $food->name }}" name="name" />
                                        </div>

                                    </div>
                                    <div class="col-md-6">

                                        <div class="input-style-2">
                                            <label>Price</label>

                                            <input type="text" value="{{ $food->price }}" name="price" />
                                        </div>

                                    </div>
                                </div>
                                <!-- end input -->
                                <!-- end select -->
                                <div class="select-style-2">
                                    <div class="select-position">
                                        <select name="type_id">

                                            @foreach ($typefood as $item)
                                                @if ($food->type_id == $item->id)
                                                    <option value="{{ $item->id }}"> {{ $item->name }}
                                                    </option>
                                                @endif
                                            @endforeach
                                            @foreach ($typefood as $item)
                                                @if ($food->type_id == $item->id)
                                                @else
                                                    <option value="{{ $item->id }}"> {{ $item->name }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- end select -->
                                <div class="row">
                                    <div class="col-md-9">

                                        <div class="input-style-1">
                                            <label>Message</label>
                                            <textarea name="description" placeholder="{{ $food->description }}" rows="5"></textarea>

                                            <div class="input-style-2">


                                                <input type="file" name="image" id="updateImage"
                                                    onchange=" previewFile()"
                                                    accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                                    multiple />
                                            </div>



                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-style-1">

                                            <label>image food</label>

                                            <img src="{{ asset('food/img/' . $food->image) }}" id="image_preview"
                                                class="w-100 " style="height: 220px;" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                                <!-- ======= input style end ======= -->
                                <div class="input-style-2">


                                    <input type="submit" class="btn btn-primary btn-block" />
                                </div>
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
