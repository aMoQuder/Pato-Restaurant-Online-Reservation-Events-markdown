@extends('layouts.app')

@section('content')
    @include('temp.navbarApp')
    {{-- ///////////////main\\\\\\\\\\\\\\\\  --}}
    <!-- Slide1 -->
    <section class="section-slide">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(images/slide1-01.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                            Welcome to
                        </span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            Pato Place
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
                            <!-- Button1 -->
                            <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1" style="background-image: url(images/master-slides-02.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15" data-appear="rollIn">
                            Welcome to
                        </span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                            Pato Place
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="slideInUp">
                            <!-- Button1 -->
                            <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1" style="background-image: url(images/master-slides-01.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <span class="caption1-slide1 txt1 t-center animated visible-false m-b-15"
                            data-appear="rotateInDownLeft">
                            Welcome to
                        </span>

                        <h2 class="caption2-slide1 tit1 t-center animated visible-false m-b-37"
                            data-appear="rotateInUpRight">
                            Pato Place
                        </h2>

                        <div class="wrap-btn-slide1 animated visible-false" data-appear="rotateIn">
                            <!-- Button1 -->
                            <a href="menu.html" class="btn1 flex-c-m size1 txt3 trans-0-4">
                                Look Menu
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="wrap-slick1-dots"></div>
        </div>
    </section>

    <!-- Welcome -->
    <section class="section-welcome bg1-pattern p-t-120 p-b-105">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-t-45 p-b-30">
                    <div class="wrap-text-welcome t-center">
                        <span class="tit2 t-center">
                            Italian Restaurant
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-5">
                            Welcome
                        </h3>

                        <p class="t-center m-b-22 size3 m-l-r-auto">
                            Donec quis lorem nulla. Nunc eu odio mi. Morbi nec lobortis est. Sed fringilla, nunc sed
                            imperdiet lacinia, nisl ante egestas mi, ac facilisis ligula sem id neque.
                        </p>

                        <a href="about.html" class="txt4">
                            Our Story
                            <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 p-b-30">
                    <div class="wrap-pic-welcome size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="images/our-story-01.jpg" alt="IMG-OUR">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($firstSet->count() > 0 || $secondSet->count() > 0)
        <!-- Our menu -->
        <section class="section-ourmenu bg2-pattern p-t-115 p-b-120">
            <div class="container">
                <div class="title-section-ourmenu t-center m-b-22">
                    <span class="tit2 t-center">
                        Discover
                    </span>

                    <h3 class="tit5 t-center m-t-2">
                        Our Menu
                    </h3>
                </div>

                <div class="row p-t-108 p-b-70">
                    <div class="col-6 m-l-r-auto">
                        <!-- Block3 -->
                        @foreach ($firstSet as $item)
                            <div class="blo3 flex-w flex-col-l-sm m-b-30">
                                <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                    <a href="#"><img src="{{ asset('food/img/' . $item->image) }}" alt="IMG-MENU"></a>
                                </div>

                                <div class="text-blo3 size21 flex-col-l-m">
                                    <a href="#" class="txt21 m-b-3">
                                        {{ $item->name }}
                                    </a>
                                    <span class="txt23">
                                        {{ $item->description }}
                                    </span>
                                    <span class="txt22 m-t-20 d-flex justify-content-between w-75">
                                        ${{ $item->price }}
                                    </span>
                                </div>
                            </div>
                        @endforeach


                    </div>

                    <div class="col-6 m-l-r-auto">
                        <!-- Block3 -->
                        @foreach ($secondSet as $item)
                            <div class="blo3 flex-w flex-col-l-sm m-b-30">
                                <div class="pic-blo3 size20 bo-rad-10 hov-img-zoom m-r-28">
                                    <a href="#"><img src="{{ asset('food/img/' . $item->image) }}" alt="IMG-MENU"></a>
                                </div>

                                <div class="text-blo3 size21 flex-col-l-m">
                                    <a href="#" class="txt21 m-b-3">
                                        {{ $item->name }}
                                    </a>
                                    <span class="txt23">
                                        {{ $item->description }}
                                    </span>
                                    <span class="txt22 m-t-20 d-flex justify-content-between w-75">
                                        ${{ $item->price }}
                                    </span>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>

            </div>
        </section>
    @endif

    <!-- Event -->
    @if ($events->count() > 0)
        <!-- Event -->
        <section class="section-event" id="countdown-container">
            <div class="wrap-slick2">
                <div class="slick2">


                    @foreach ($events as $index => $event)
                        @if ($count == 1)
                            <div class="item-slick2 item1-slick2" style="background-image: url(images/bg-event-01.jpg);">
                            @elseif($count == 2)
                                <div class="item-slick2 item3-slick2"
                                    style="background-image: url(images/bg-event-04.jpg);">
                                @elseif($count == 3)
                                    <div class="item-slick2 item2-slick2"
                                        style="background-image: url(images/bg-event-02.jpg);">
                        @endif
                        <div class="wrap-content-slide2 p-t-115 p-b-208">
                            <div class="container">
                                <!-- - -->
                                <div class="title-event t-center m-b-52">
                                    <span class="tit2 p-l-15 p-r-15">
                                        Upcomming
                                    </span>

                                    <h3 class="tit6 t-center p-l-15 p-r-15 p-t-3">
                                        Events
                                    </h3>
                                </div>

                                <!-- Block2 -->
                                @if ($count == 1)
                                    <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false"
                                        data-appear="zoomIn">
                                        <input type="hidden" value="{{ $count++ }}">
                                    @elseif($count == 2)
                                        <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false"
                                            data-appear="rotateInUpLeft">
                                            <input type="hidden" value="{{ $count++ }}">
                                        @elseif($count == 3)
                                            <div class="blo2 flex-w flex-str flex-col-c-m-lg animated visible-false"
                                                data-appear="fadeInDown">
                                                <input type="hidden" value="{{ $count = 2 }}">
                                @endif
                                <input type="hidden" data-toggle="date-toggle" value="{{ $event->date }}">
                                <!-- تاريخ الحدث -->
                                <input type="hidden" data-toggle="time-toggle" value="{{ $event->time }}">
                                <!-- وقت الحدث -->

                                <!-- Pic block2 -->
                                <a href="#" class="wrap-pic-blo2 bg{{ $count }}-blo2"
                                    style="background-image: url('{{ asset('Event/img/' . $event->image) }}');" >
                                    <div class="time-event size10 txt6 effect1">
                                        <span class="txt-effect1 flex-c-m">
                                            08:00 PM Tuesday - 21 November 2018
                                        </span>
                                    </div>
                                </a>

                                <!-- Text block2 -->
                                <div class="wrap-text-blo2 flex-col-c-m p-l-40 p-r-40 p-t-45 p-b-30">
                                    <h4 class="tit7 t-center m-b-10">
                                        {{ $event->title }}
                                    </h4>

                                    <p class="t-center">
                                        {{ $event->description }}
                                    </p>
                                    <div class="flex-sa-m flex-w w-full m-t-40" id="countdown">
                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 days" id="days">0</span>
                                            <span class="dis-block t-center txt8">Days</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 hours" id="hours">0</span>
                                            <span class="dis-block t-center txt8">Hours</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 minutes" id="minutes">0</span>
                                            <span class="dis-block t-center txt8">Minutes</span>
                                        </div>

                                        <div class="size11 flex-col-c-m">
                                            <span class="dis-block t-center txt7 m-b-2 seconds" id="seconds">0</span>
                                            <span class="dis-block t-center txt8">Seconds</span>
                                        </div>
                                    </div>


                                    <a href="#" class="txt4 m-t-40">
                                        View Details
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
    @endforeach


    </div>

    <div class="wrap-slick2-dots"></div>
    </div>
    </section>
    @endif
    <!-- Booking -->
    <section class="section-booking bg1-pattern p-t-100 p-b-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 p-b-30">
                    <div class="t-center">

                        @if (session('massege'))
                            <h4 class="alert alert-success text-center">{{ session('massege') }}</h4>
                        @endif
                        <span class="tit2 t-center">
                            Reservation
                        </span>

                        <h3 class="tit3 t-center m-b-35 m-t-2">
                            Book table
                        </h3>
                    </div>

                    <form class="wrap-form-booking"action="{{ route('bookSave') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Date -->
                                <span class="txt9">
                                    Date
                                </span>

                                <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="my-calendar bo-rad-10 sizefull txt10 p-l-20" type="text"
                                        name="date">
                                    <i class="btn-calendar fa fa-calendar ab-r-m hov-pointer m-r-18"
                                        aria-hidden="true"></i>


                                </div>
                                @error('date')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror


                                <!-- Time -->
                                <span class="txt9">
                                    Time
                                </span>

                                <div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <!-- Select2 -->
                                    <select class="selection-1" name="time">
                                        <option>9:00</option>
                                        <option>9:30</option>
                                        <option>10:00</option>
                                        <option>10:30</option>
                                        <option>11:00</option>
                                        <option>11:30</option>
                                        <option>12:00</option>
                                        <option>12:30</option>
                                        <option>13:00</option>
                                        <option>13:30</option>
                                        <option>14:00</option>
                                        <option>14:30</option>
                                        <option>15:00</option>
                                        <option>15:30</option>
                                        <option>16:00</option>
                                        <option>16:30</option>
                                        <option>17:00</option>
                                        <option>17:30</option>
                                        <option>18:00</option>
                                    </select>

                                </div>
                                @error('time')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror
                                <!-- People -->
                                <span class="txt9">
                                    People
                                </span>

                                <div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <!-- Select2 -->
                                    <select class="selection-1" name="people">
                                        <option>1 person</option>
                                        <option>2 people</option>
                                        <option>3 people</option>
                                        <option>4 people</option>
                                        <option>5 people</option>
                                        <option>6 people</option>
                                        <option>7 people</option>
                                        <option>8 people</option>
                                        <option>9 people</option>
                                        <option>10 people</option>
                                        <option>11 people</option>
                                        <option>12 people</option>
                                    </select>
                                </div>
                                @error('Num_peaple')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <!-- Name -->
                                <span class="txt9">
                                    Name
                                </span>

                                <div class="wrap-inputname size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name"
                                        placeholder="Name">
                                </div>
                                @error('name')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror
                                <!-- Phone -->
                                <span class="txt9">
                                    Phone
                                </span>

                                <div class="wrap-inputphone size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="phone"
                                        placeholder="Phone">
                                </div>
                                @error('phone')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror
                                <!-- Email -->
                                <span class="txt9">
                                    Email
                                </span>

                                <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">
                                    <input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email"
                                        placeholder="Email">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger m-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="wrap-btn-booking flex-c-m m-t-6">
                            <!-- Button3 -->
                            <button type="submit" class="btn3 flex-c-m size13 txt11 trans-0-4">
                                Book Table
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 p-b-30 p-t-18">
                    <div class="wrap-pic-booking size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                        <img src="images/booking-01.jpg" alt="IMG-OUR">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Video -->
    <section class="section-video parallax100" style="background-image: url(images/bg-cover-video-02.jpg);">
        <div class="content-video t-center p-t-225 p-b-250">
            <span class="tit2 p-l-15 p-r-15">
                Discover
            </span>

            <h3 class="tit4 t-center p-l-15 p-r-15 p-t-3">
                Our Video
            </h3>

            <div class="btn-play ab-center size16 hov-pointer m-l-r-auto m-t-43 m-b-33" data-toggle="modal"
                data-target="#modal-video-01">
                <div class="flex-c-m sizefull bo-cir bgwhite color1 hov1 trans-0-4">
                    <i class="fa fa-play fs-18 m-l-2" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog -->
    @if ($blogs->count() > 0)
        <section class="section-blog bg-white p-t-115 p-b-123">
            <div class="container">
                <div class="title-section-ourmenu t-center m-b-22">
                    <span class="tit2 t-center">
                        Latest News
                    </span>

                    <h3 class="tit5 t-center m-t-2">
                        The Blog
                    </h3>
                </div>

                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4 p-t-30">
                            <!-- Block1 -->
                            <div class="blo1">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom pos-relative">
                                    <a href=""><img src="{{ asset('blog/img/' . $blog->image) }}" class="w-100"
                                            style="height: 220px;" alt="IMG-INTRO"></a>


                                </div>

                                <div class="wrap-text-blo1 p-t-35">
                                    <a href="blog-detail.html">
                                        <h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                            {{ $blog->title }}</h4>
                                    </a>

                                    <p class="m-b-20">
                                        {{ $blog->description }}
                                    </p>

                                    <a href="blog-detail.html" class="txt4">
                                        Continue Reading
                                        <i class="fa fa-long-arrow-right m-l-10" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </section>
    @endif




    {{-- ///////////////main\\\\\\\\\\\\\\\\  --}}
    @include('temp.footer')


@endsection
