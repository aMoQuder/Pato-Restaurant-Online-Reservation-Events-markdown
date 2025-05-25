@extends('layouts.app')

@section('content')
    @include('temp.navbarApp')
    {{-- ///////////////main\\\\\\\\\\\\\\\\  --}}



    <!-- Lunch -->
    <section class="section-lunch bgwhite">

        @foreach ($TypeFoods as $TypeFood)
            <div class="header-lunch parallax0 parallax100" style="background-image: url(images/header-menu-01.jpg);">
                <div class="bg1-overlay t-center p-t-170 p-b-165">
                    <h2 class="tit4 t-center">
                        {{ $TypeFood->name }}
                    </h2>
                </div>
            </div>

            <div class="container">
                <div class="row p-t-108 p-b-70">
                    @foreach ($foods as $food)
                        @if ($TypeFood->id == $food->type_id)
                            <div class="col-6 m-l-r-auto">
                                <!-- Block3 -->
                                <div class="blo3 flex-w flex-col-l-sm m-b-30">
                                    <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                        <a href="#"><img src="{{ asset('food/img/' . $food->image) }}" alt="IMG-MENU"></a>
                                    </div>

                                    <div class="text-blo3 size21 flex-col-l-m">
                                        <a href="#" class="txt21 m-b-3">
                                            {{ $food->name }}
                                        </a>

                                        <span class="txt23">
                                            {{ $food->description }}
                                        </span>

                                        <span class="txt22 m-t-20">
                                            $ {{ $food->price }}

                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @endforeach

    </section>




    {{-- ///////////////main\\\\\\\\\\\\\\\\  --}}
    @include('temp.footer')
@endsection
