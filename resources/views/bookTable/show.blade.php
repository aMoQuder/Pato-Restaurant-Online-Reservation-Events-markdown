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
                            <h2 class="mr-40">ONE BOOK</h2>
                            <a href="{{ route('allBook') }}" class="main-btn primary-btn btn-hover btn-sm">
                                Go Back</a>
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
                                        One Book
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
                                    <h2 class="mb-10"> One Book</h2>
                                    <p class="text-sm">
                                        Admin Dashboard Design
                                    </p>
                                </div>
                                <div class="invoice-logo">
                                    <img src="assets/images/invoice/uideck-logo.svg" alt="" />
                                </div>
                                <div class="invoice-date">
                                    <p><span>Date reservation:</span>{{ $bookTable->date }}</p>
                                    <p><span>Order ID:</span> #{{ $bookTable->id + 5453 }}</p>
                                </div>
                            </div>
                            <div class="invoice-address">
                                <div class="address-item">
                                    <h1 class="mb-15">{{ $bookTable->name }}</h1>

                                    <p class="text-sm">
                                        <span class="text-medium" style="margin-top: 15px;">Phone:</span>
                                        {{ $bookTable->phone }}
                                    </p>


                                    <p class="text-sm">
                                        <span class="text-medium">Email:</span>
                                        {{ $bookTable->email }}
                                    </p>
                                </div>

                            </div>
                            <div class="row px-5 w-75"></div>
                            <div class="table-responsive">
                                <table class="invoice-table table text-center">
                                    <thead>
                                        <tr>
                                            <th class="service">
                                                <h6 class="text-sm text-medium">people</h6>
                                            </th>
                                            <th class="desc">
                                                <h6 class="text-sm text-medium">time</h6>
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="text-sm">{{ $bookTable->Num_peaple }}</p>
                                            </td>
                                            <td>
                                                <p class="text-sm">
                                                    {{ $bookTable->time }}
                                                </p>
                                            </td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="note-wrapper warning-alert py-4 px-sm-3 px-lg-5">
                                <div class="alert">
                                    <h5 class="text-bold mb-15">Notes:</h5>
                                    <p class="text-sm text-gray">
                                        mr: {{ $bookTable->name }}, you has booked one table for
                                        {{ $bookTable->Num_peaple }}
                                        in {{ $bookTable->date }} day at {{ $bookTable->time }} on our web site
                                        so your book has been made sure and we look for you in in {{ $bookTable->date }}
                                        day at {{ $bookTable->time }}
                                        ane we thank you to choice us

                                    <h5 class="text-bold mt-15" style="margin-right:auto; ">thank you</h5>


                                    </p>
                                </div>
                            </div>
                            <div class="invoice-action">
                                <ul class="">
                                    <li class="m-2">
                                        <a href="{{route('lookingBook',$bookTable->id)}}" class="main-btn success-btn-outline btn-hover">
                                            Sent Message Now
                                        </a>
                                    </li>

                                </ul>
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
