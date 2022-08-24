
@extends('welcome')
@section('content')

    <div class="container-fluid">


        <div class="row" style="background: #F5F5F5;font-family: 'Montserrat', sans-serif">
            @include('menuBar')

            <div  class="col-md-12 col-xl-9 col-xxl-10 col-lg-12">



                    <div class="row">
                        <div class="col-8 my-2 ">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">


                                    <a href="/all/companies" class="bi bi-arrow-left fs-2 text-black d-md-none d-lg-none d-xl-block"></a>


                                <div class="row mt-2 mx-5" style="font-size: 14px">
                                    <div class="col-5">
                                        <li class="breadcrumb-item "><a href="#" class="text-black text-decoration-none">Company</a></li>
                                    </div>
                                    <div class="col-2">/</div>
                                    <div class="col-5">
                                        <li class="breadcrumb-item  text-black " aria-current="page"><a href="#" class="text-black text-decoration-none ">Details</a></li>
                                    </div>

                                </div>

                            </ol>
                        </nav>
                    </div>

                        <div class="col-4">
                            <a href="/all/companies" class="bi bi-x fs-2 text-black "></a>
                        </div>
                    </div>

                    <div class="container-fluid row mt-2">
                        <div class="col-12">


              <div class="row" style="font-size: 14px">
                  <div class="col-12">
                      <div class="row bg-white border">

                          <div class="col-4 ">
                              <span class="fs-5 fw-normal" >Profile</span>
                              <div class="card border-0 py-4" >



                                  <img src="/Image/Capture3.jpg" class="card-img-100 mx-auto d-block rounded-circle" alt="..." style="width: 8rem; height: 8rem">
                                  <div class="card-body text-center" >
                                      <h5 class="card-title text-muted" style="font-size: 17px">{{$company->company_name}}</h5>
                                      <h6 class="card-text text-muted" style="font-size: 14px">Owner Name: {{$company->owner_name}}</h6>
                                      <h6 class="card-text text-muted" style="font-size: 14px">GSTIN: {{$company->GSTIN}}</h6>
                                      <h6 class="card-text text-muted" style="font-size: 13px">Member Since: {{$company->member_since}}</h6>

                                  </div>

                              </div>

                          </div>

                          <div class="col-8" >

                              <div class="row">
                                  <div class="col-12 border" >
                                      <div class="container" >

                                          <div class="container row py-3">
                                              <div class="col-12 " >
                                                  <h5 style="font-size: 16px">Official Information</h5>
                                              </div>
                                              <div class="row my-2">
                                                  <div class="col-xxl-4 col-md-6 col-xl-4 col-lg-4">
                                                      <div class="row">
                                                          <span>Email</span>
                                                          <span>{{$company->email}}</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-4 col-md-6 col-xl-4 col-lg-4">
                                                      <div class="row">
                                                      <span>Phone</span>
                                                      <span>{{$company->phone}}</span>
                                                  </div>
                                                  </div>
                                                  <div class="col-xxl-4 col-md-12 col-xl-4 col-lg-4 mt-md-3 text-md-center">
                                                      <div class="row">
                                                      <span>Address</span>
                                                      <span>{{$company->address}}</span>
                                                  </div>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>

                                  </div>
                                  <div class="col-12 border" >
                                      <div class="container">

                                          <div class="container row py-3">
                                              <div class="col-12 ">
                                                  <h5 style="font-size: 16px">Contact Person</h5>
                                              </div>
                                              <div class="row my-1">
                                                  <div class="col-xxl-3 col-md-6 col-xl-6">
                                                      <div class="row">
                                                          <span>Name</span>
                                                          <span>Deep Hasan</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-3 col-md-6 col-xl-6">
                                                      <div class="row">
                                                          <span>Role </span>
                                                          <span>manager</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-3 col-md-6 col-xl-6">
                                                      <div class="row">
                                                          <span>Email</span>
                                                          <span>*****@gmail.com</span>
                                                      </div>
                                                  </div>
                                                  <div class="col-xxl-3 col-md-6 col-xl-6">
                                                      <div class="row">
                                                          <span>phone</span>
                                                          <span>01625626787</span>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                      </div>

                                  </div>
                                  <div class="col-12 border" >
                                      <div class="container">

                                          <div class="container row  py-3">
                                              <div class="col-12">
                                                  <h5 style="font-size: 16px">Business Information</h5>
                                              </div>

                                                  @foreach($company->businesses as $business)
                                                  <div class="col-6">
                                                      <div class="row">
                                                          <span>

                                                                 {{$business->title}}

                                                          </span>
                                                          <span>Branch: 05</span>
                                                      </div>
                                                  </div>
                                                  @endforeach
{{--                                                  <div class="col-6">--}}
{{--                                                      <div class="row">--}}
{{--                                                          <span>Tour & Travel</span>--}}
{{--                                                          <span>Branch: 05</span>--}}
{{--                                                      </div>--}}
{{--                                                  </div>--}}


                                          </div>

                                      </div>

                                  </div>
                              </div>


                          </div>


                  </div>

              </div>


                        </div>
                    </div>

            </div>
        </div>

    </div>

@endsection
