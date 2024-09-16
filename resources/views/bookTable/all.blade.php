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
                            <h2 class="mr-40">BOOK TABLE</h2>
                            <a href="#0" class="main-btn primary-btn btn-hover btn-sm">
                                <i class="lni lni-plus mr-5"></i> New Book of table</a>
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
                                        Book of Table </li>
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
                                    <h2 class="mb-10">Book of TAble</h2>
                                    <p class="text-sm">
                                        Admin Dashboard Design & Development
                                    </p>
                                </div>
                                <div class="invoice-logo">
                                    <img src="assets/images/invoice/uideck-logo.svg" alt="" />
                                </div>
                                <div class="invoice-date">
                                    <p><span>New Booking:</span> 20/02/2024</p>
                                    <p><span>All Booking :</span>{{$bookTables->count()}}</p>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="invoice-table table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="service">
                                                <h6 class="text-sm text-medium ">Name</h6>
                                            </th>
                                            <th class="desc">
                                                <h6 class="text-sm text-medium">peaple</h6>
                                            </th>
                                            <th class="qty">
                                                <h6 class="text-sm text-medium">Date</h6>
                                            </th>
                                            <th class="amount">
                                                <h6 class="text-sm text-medium">time</h6>
                                            </th>
                                            <th class="amount">
                                                <h6 class="text-sm text-medium">action</h6>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($bookTables as $bookTable)
                                            <tr>
                                                <td>

                                                    <div class="action justify-content-start ">



                                                        @if ($bookTable->nafigation == 1)
                                                            <a href="{{ route('showBook', $bookTable->id) }}"
                                                                class="icon-style" style="background-color:brown; ">
                                                                <i class="lni lni-cloud-upload "></i>
                                                            </a>
                                                        @elseif ($bookTable->nafigation == 2)
                                                            <a href="{{ route('showBook', $bookTable->id) }}"
                                                                class="icon-style"
                                                                style="background-color:rgb(17, 21, 243); ">
                                                                <i class="mdi mdi-chat-question-outline"></i>
                                                            </a>
                                                        @elseif ($bookTable->nafigation == 3)
                                                            <a href="{{ route('showBook', $bookTable->id) }}"
                                                                class="icon-style" style="background-color:forestgreen; ">
                                                                <i class="mdi mdi-check-decagram-outline"></i>
                                                            </a>
                                                        @endif



                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $bookTable->name }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">
                                                        {{ $bookTable->Num_peaple }} </p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $bookTable->date }}</p>
                                                </td>
                                                <td>
                                                    <p class="text-sm">{{ $bookTable->time }}</p>
                                                </td>
                                                <td>
                                                    <div class="action justify-content-start ">



                                                        <a href="{{ route('deletBook', $bookTable->id) }}"
                                                            class=" text-danger  " style="margin-left: 7px;">
                                                            <i class="lni lni-trash-can "></i>
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
