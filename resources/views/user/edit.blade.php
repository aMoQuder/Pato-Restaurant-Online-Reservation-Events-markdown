@extends('layouts.DashboardApp')

@section('content')
    @include('temp.navbarDashboard')


    {{-- -----------------------start code ------------------------- --}}

    <form action="{{ route('saveUser') }}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="form-elements-wrapper">
            <div class="container-fluid p-5">

                <div class="row">
                    <div class="col-lg-7 m-auto">
                        <!-- input style start -->
                        <div class="card-style mb-30">
                            <h6 class="mb-25">Input Fields</h6>
                            <div class="input-style-1">

                                <input type="hidden" name="old_id" value="{{$user->id}}">
                                <label>Full Name</label>
                                <input type="text" value="{{ $user->name }}" name="name" />

                            </div>
                            <!-- end input -->
                            <div class="input-style-2">
                                <input type="text" value="{{ $user->email }}" name="email" />
                                <span class="icon"> <i class="lni lni-email"></i> </span>

                            </div>
                            <!-- end input -->
                            <div class="input-style-3">
                                <input type="password" name="password" />
                                <span class="icon"><i class="lni lni-aye"></i></span>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="select-style-1">
                                        <label>role</label>
                                        <div class="select-position">
                                            <select name="role">
                                                @if ($user->role == 'admin')
                                                <option selected value="Admin">Admin</option>
                                                    <option value="User">User</option>
                                                @else
                                                    <option selected value="User">User</option>
                                                    <option value="Admin">Admin</option>
                                                @endif

                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="select-style-1">
                                        <label>status</label>
                                        <div class="select-position">
                                            <select name="status">

                                                @if ($user->status == 'active')
                                                    <option  selected value="active">active</option>
                                                    <option value="block">block</option>
                                                @else
                                                <option  value="block">block</option>
                                                    <option selected value="active">active</option>
                                                @endif

                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-style-2">


                                <input type="submit" class="btn btn-primary btn-block" />
                            </div>
                            <!-- end input -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end card -->
        <!-- ======= input style end ======= -->
    </form>




    {{-- -----------------------end code ------------------------- --}}


    @include('temp.footerdashboard')
@endsection
