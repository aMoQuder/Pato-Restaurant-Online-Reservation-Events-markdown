@extends('layouts.DashboardApp')

@section('content')
    @include('temp.navbarDashboard')


    {{-- -----------------------start code ------------------------- --}}

    <!-- ========== table components start ========== -->
    <section class="table-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Tables</h2>
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
                                        Tables
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

            <!-- ========== tables-wrapper start ========== -->
            <div class="tables-wrapper">
                <div class="row">
                    @if (session('massege'))
                    <h4 class="alert alert-success text-center">{{ session('massege') }}</h4>
                @endif
                    @if (session('delete'))
                    <h4 class="alert alert-danger text-center">{{ session('delete') }}</h4>
                @endif
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <h6 class="mb-10">User Table</h6>
                            <p class="text-sm mb-20">
                                For basic styling—light padding and only horizontal dividers—use the class table.
                            </p>
                            <div class="table-wrapper table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="lead-info">
                                                <h6>name</h6>
                                            </th>
                                            <th class="lead-email">
                                                <h6>Email</h6>
                                            </th>
                                            <th class="lead-phone">
                                                <h6>role</h6>
                                            </th>
                                            <th class="lead-company">
                                                <h6>status</h6>
                                            </th>
                                            <th>
                                                <h6>Action</h6>
                                            </th>
                                        </tr>
                                        <!-- end table row-->
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user )


                                        <tr>
                                            <td class="min-width">
                                                <div class="lead">
                                                  
                                                    <div class="lead-text">
                                                        <p>{{$user->name}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <p><a >{{$user->email}}</a></p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{$user->role}}</p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{$user->status}}</p>
                                            </td>
                                            <td>
                                                <div class="action justify-content-start " >
                                                    <a href="{{route("deletuser",$user->id)}}" class="text-danger  ">
                                                        <i class="lni lni-trash-can"></i>
                                                    </a>
                                                    <a href="{{route("editUser",$user->id)}}" class="text-danger  mx-3">
                                                        <i class="lni lni-pencil"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- end table row -->
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- end table -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->


            </div>
            <!-- ========== tables-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== table components end ========== -->






    {{-- -----------------------end code ------------------------- --}}


    @include('temp.footerdashboard')
@endsection
