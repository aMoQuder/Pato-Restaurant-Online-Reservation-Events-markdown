@extends('layouts.DashboardApp')

@section('content')
    @include('temp.navbarDashboard')


    {{-- -----------------------start code ------------------------- --}}

<form action="{{route('storeUser')}}" method="post" enctype="multipart/form-data">
    @csrf


        <div class="form-elements-wrapper">
            <div class="container-fluid p-5">

                <div class="row">
                    <div class="col-lg-7 m-auto">
                        <!-- input style start -->
                        <div class="card-style mb-30">
                            <h6 class="mb-25">Input Fields</h6>
                            <div class="input-style-1">
                                <label>Full Name</label>
                                <input type="text" placeholder=" Name" name="name" />
                                @error('name')
                                <div class="alert alert-danger m-2">{{ $message }}</div>
                            @enderror
                            </div>
                            <!-- end input -->
                            <div class="input-style-2">
                                <input type="text" placeholder="E-mail" name="email" />
                                <span class="icon"> <i class="lni lni-email"></i> </span>
                                @error('email')
                                <div class="alert alert-danger m-2">{{ $message }}</div>
                            @enderror
                            </div>
                            <!-- end input -->
                            <div class="input-style-3">
                                <input type="password" name="password" />
                                <span class="icon"><i class="lni lni-aye"></i></span>
                                @error('password')
                                <div class="alert alert-danger m-2">{{ $message }}</div>
                            @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="select-style-1">
                                        <label>role</label>
                                        <div class="select-position">
                                            <select name="role">
                                                <option value="User">User</option>
                                                <option value="Admin">Admin</option>

                                            </select>
                                            @error('role')
                                            <div class="alert alert-danger m-2">{{ $message }}</div>
                                        @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="select-style-1">
                                        <label>status</label>
                                        <div class="select-position">
                                            <select name="status">
                                                <option value="active">active</option>
                                                <option value="block">block</option>

                                            </select>
                                            @error('status')
                                            <div class="alert alert-danger m-2">{{ $message }}</div>
                                        @enderror
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
