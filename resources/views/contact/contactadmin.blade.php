@extends('layouts.DashboardApp')

@section('content')
    @include('temp.navbarDashboard')


    {{-- -----------------------start code ------------------------- --}}



    <!-- ========== section start ========== -->
    <section>
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title d-flex align-items-center flex-wrap">
                            <h2 class="mr-40">Invoice</h2>
                            <a href="#0" class="main-btn primary-btn btn-hover btn-sm">
                                <i class="lni lni-plus mr-5"></i> New Invoice</a>
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
                                        Invoice
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

            <!-- Invoice Wrapper Start -->
            <div class="invoice-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="invoice-card card-style mb-30">
                            <div class="invoice-header">

                                <div class="invoice-logo">
                                    <img src="assets/images/invoice/uideck-logo.svg" alt="" />
                                </div>

                            </div>

                            <div class="table-responsive">
                                <table class="invoice-table table">
                                    <thead>
                                        <tr>
                                            <th class="service">
                                                <h6 class="text-sm text-medium">Name</h6>
                                            </th>
                                            <th class="desc">
                                                <h6 class="text-sm text-medium">subject</h6>
                                            </th>
                                            <th class="qty">
                                                <h6 class="text-sm text-medium">E-mail</h6>
                                            </th>
                                            <th class="amount">
                                                <h6 class="text-sm text-medium">Action</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts as $contact)
                                            <tr>
                                                <td>
                                                    <p class="text-sm">{{$contact->name}}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">
                                                        {{$contact->subject}}                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{$contact->email}}</p>
                                                </td>
                                                <td>
                                                    <div class="action justify-content-start " >
                                                        <a href="{{route("deletContact",$contact->id)}}" class="text-danger  ">
                                                            <i class="lni lni-trash-can"></i>
                                                        </a>
                                                        <a href="{{route("showContact",$contact->id)}}" class="text-danger  mx-3">
                                                            <i class="lni lni-eye"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- End Card -->
                    </div>
                    <!-- ENd Col -->
                </div>
                <!-- End Row -->
            </div>
            <!-- Invoice Wrapper End -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->




 
    {{-- -----------------------end code ------------------------- --}}


    @include('temp.footerdashboard')
@endsection
