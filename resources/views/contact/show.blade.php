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
                  <h2 class="mr-40">CONTACT</h2>
                  <a href="{{route('allcontact')}}" class="main-btn primary-btn btn-hover btn-sm">
                    <i class="lni lni-plus mr-5"></i> All Contact</a>
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
                        Contact
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

                    <div class="invoice-logo">
                      <img src="assets/images/invoice/uideck-logo.svg" alt="" />
                    </div>

                  </div>
                  <div class="invoice-address">
                    <div class="address-item">
                      <h1>{{$contact->name}}</h1>
                      <p class="text-sm">
                          <span class="text-medium">Subject:</span>
                          {{$contact->subject}}                      </p>
                      <p class="text-sm">
                        <span class="text-medium">Email:</span>
                        {{$contact->email}}
                                          </p>
                    </div>

                  </div>

                  <div class="note-wrapper warning-alert py-4 px-sm-3 px-lg-5">
                    <div class="alert">
                      <h5 class="text-bold mb-15">Message:</h5>
                      <p class="text-sm text-gray">
                        {{$contact->message}}
                      </p>
                    </div>
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
