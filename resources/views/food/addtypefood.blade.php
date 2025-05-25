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

                                    <div id="PrimaryModalalert" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-close-area modal-close-df">
                                                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                </div>
                                                <div class="modal-body">
                                                    <i class="fa fa-check modal-check-pro"></i>
                                                    <h2>Awesome!</h2>
                                                    <p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a data-dismiss="modal" href="#">Cancel</a>
                                                    <a href="#">Process</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                        <form action="{{ route('typefoodStore') }}" method="post" enctype="multipart/form-data">

                            @csrf
                            <!-- input style start -->
                            <div class="card-style mb-30">
                                <h6 class="mb-25">Input Fields</h6>
                                <div class="row">

                                    <div class="col-md-12">

                                        <div class="input-style-1">
                                            <label>Name</label>
                                            <input type="text" placeholder="Name" name="name" />
                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger m-2">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <!-- end input -->

                                <div class="row">

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
