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
                        <form action="{{ route('foodStore') }}" method="post" enctype="multipart/form-data">

                            @csrf
                            <!-- input style start -->
                            <div class="card-style mb-30">
                                <h6 class="mb-25">Input Fields</h6>
                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="input-style-1">
                                            <label>Name</label>
                                            <input type="text" placeholder="Name" name="name" />
                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger m-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">

                                        <div class="input-style-2">
                                            <label>Price</label>

                                            <input type="text" placeholder="Price" name="price" />
                                        </div>
                                        @error('price')
                                            <div class="alert alert-danger m-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- end input -->
                                <!-- end select -->
                                <div class="select-style-2">
                                    <div class="select-position">
                                        <select name="type_id">
                                            <option value="1">Drink</option>
                                            <option value="2">Dinnir</option>
                                            <option value="3">lunch</option>
                                            <option value="4">Break fast</option>
                                        </select>
                                    </div>
                                </div>
                                @error('type_id')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror

                                <!-- end select -->

                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="input-style-1">
                                            <label>Message</label>
                                            <textarea placeholder="Message" name="description" rows="5"></textarea>
                                        </div>
                                        @error('description')
                                            <div class="alert alert-danger m-2">{{ $message }}</div>
                                        @enderror
                                        <div class="input-style-2">


                                            <input type="file" name="image"  id="updateImage"
                                            onchange=" previewFile()"
                                            accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                            multiple />                                        </div>


                                    </div>
                                    <div class="col-md-3">
                                        <div class="input-style-1">

                                            <label>image food</label>

                                            <img src="" class="w-100 " id="image_preview" style="height: 220px;" alt="">
                                        </div>
                                        @error('image')
                                        <div class="alert alert-danger m-2">{{ $message }}</div>
                                    @enderror
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
