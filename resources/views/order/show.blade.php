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
                            <h2 class="mr-40">ORDER</h2>
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
                                        Order
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
                                    <h2 class="mb-10">Order</h2>
                                    <p class="text-sm">
                                        Admin Dashboard Design & Development
                                    </p>
                                </div>
                                <div class="invoice-logo">
                                    <img src="assets/images/invoice/uideck-logo.svg" alt="" />
                                </div>
                                <div class="invoice-date">
                                    <p><span>Date Order:</span> 20/02/2024</p>
                                    <p><span>Order ID:</span> #5467</p>
                                </div>
                            </div>
                            <div class="invoice-address">
                                <div class="address-item">
                                    <h1>John Doe</h1>
                                    <p class="text-sm">
                                        <span class="text-medium"  style="margin-top: 15px;">Address:</span> 3891 Ranchview Dr. Richardson, California
                                        62639
                                    </p>
                                    <p class="text-sm">
                                        <span class="text-medium">Total price :</span>
                                        $2639
                                    </p>

                                </div>

                            </div>
                            <!-- End Title -->
                            <div class="table-responsive">
                                <table class="table top-selling-table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <h6 class="text-sm text-medium">order</h6>
                                            </th>
                                            <th class="min-width">
                                                <h6 class="text-sm text-medium">
                                                    Category
                                                </h6>
                                            </th>
                                            <th class="min-width">
                                                <h6 class="text-sm text-medium">
                                                    price
                                                </h6>
                                            </th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="product">
                                                    <div class="image">
                                                        <img src="assets/images/products/product-mini-4.jpg"
                                                            alt="" />
                                                    </div>
                                                    <p class="text-sm">Kitchen</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm">Drinkk</p>
                                            </td>
                                            <td>
                                                <p class="text-sm">$345</p>
                                            </td>


                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table -->
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
