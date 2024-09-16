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
                            <h2 class="mr-40">ALL ORDER</h2>
                            <a href="#0" class="main-btn primary-btn btn-hover btn-sm">
                                <i class="lni lni-plus mr-5"></i> New Order</a>
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
                                        All Order
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
                                <div class="invoice-for">
                                    <h2 class="mb-10">All Order</h2>
                                    <p class="text-sm">
                                        Admin Dashboard Design & Development
                                    </p>
                                </div>
                                <div class="invoice-logo">
                                    <img src="assets/images/invoice/uideck-logo.svg" alt="" />
                                </div>
                                <div class="invoice-date">

                                    <p><span>All Order :</span> #5467</p>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="invoice-table table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="service">
                                                <h6 class="text-sm text-medium">Name</h6>
                                            </th>
                                            <th class="desc">
                                                <h6 class="text-sm text-medium">Addres</h6>
                                            </th>
                                            <th class="desc">
                                                <h6 class="text-sm text-medium">Total price</h6>
                                            </th>
                                            <th class="desc">
                                                <h6 class="text-sm text-medium">action</h6>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>

                                                <div class="action justify-content-start ">
                                                    <a href="" class="icon-style" style="background-color:brown; ">
                                                        <i class="lni lni-cloud-upload "></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm">Admin Dashboard</p>
                                            </td>
                                            <td>
                                                <p class="text-sm">
                                                    Design and Development Service
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-sm">$5613</p>
                                            </td>
                                            <td>
                                                <div class="action justify-content-start ">
                                                    <div class="action justify-content-start ">



                                                        <a href="" class=" text-danger  " style="margin-left: 7px;">
                                                            <i class="lni lni-trash-can "></i>
                                                        </a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

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
