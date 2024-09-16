@extends('layouts.DashboardApp')

@section('content')
    @include('temp.navbarDashboard')


    {{-- -----------------------start code ------------------------- --}}


    <!-- End Col -->
    <section class="section">
        <div class="container-fluid p-5">

            <div class="row">

                @if (session('massege'))
                <h4 class="alert alert-success text-center">{{ session('massege') }}</h4>
            @endif
                @if (session('delete'))
                <h4 class="alert alert-danger text-center">{{ session('delete') }}</h4>
            @endif
                <!-- End Col -->
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="title d-flex flex-wrap align-items-center justify-content-between">
                            <div class="left">
                                <h6 class="text-medium mb-30">Sales History</h6>
                            </div>
                            <div class="right">
                                <div class="select-style-1">
                                    <div class="select-position select-sm">
                                       <a class="btn btn-success" href="{{route('createfood')}}">Add food</a>
                                    </div>
                                </div>
                                <!-- end select -->
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">Food</h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Type Food <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                price <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>

                                        <th>
                                            <h6 class="text-sm text-medium text-end">
                                                Actions <i class="lni lni-arrows-vertical"></i>
                                            </h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($foods as $food)
                                        <tr>
                                            <td>
                                                <div class="product">
                                                    <div class="image">
                                                        <img src="{{ asset('food/img/' . $food->image) }}" alt="" />
                                                    </div>
                                                    <p class="text-sm">{{ $food->name }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm">
                                                    @foreach ($TypeFoods as $TypeFood)
                                                        @if ($food->type_id == $TypeFood->id)
                                                            {{ $TypeFood->name }}
                                                        @endif
                                                    @endforeach

                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-sm">${{ $food->price }}</p>
                                            </td>

                                            <td>
                                                <div class="action justify-content-end">
                                                    <a href="{{route('updatefood',$food->id)}}" class="edit">
                                                        <i class="lni lni-pencil"></i>
                                                    </a>
                                                    <a href="{{route('deletfood',$food->id)}}" class="trash mx-3">
                                                        <i class="lni lni-trash-can"></i> </a>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table -->
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </section>



    {{-- -----------------------end code ------------------------- --}}


    @include('temp.footerdashboard')
@endsection
