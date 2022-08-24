@extends('welcome')
@section('content')

    <div class="container-fluid">



        <div class="row" style="background: #F5F5F5; font-family: 'Montserrat', sans-serif">


            @include('menuBar')

            <div  class="col-md-12 col-xl-9 col-xxl-10 col-lg-12">



                <div class="row">
                    <div class="col-8 my-2 ">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">


                                <a href="{{route('project.lead.list',['project'=>$project])}}" class="bi bi-arrow-left fs-2 text-black d-md-none d-lg-none d-xl-block"></a>


                                <div class="row mt-2 mx-5">
                                    <div class="col-5">
                                        <li class="breadcrumb-item "><a href="#" class="text-black text-decoration-none">Lead</a></li>
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
                        <a href="#" class="bi bi-x fs-2 text-black "></a>
                    </div>
                </div>

                <div class="container-fluid row mt-2">
                    <div class="col-12">


                        <div class="row">
                            <div class="col-12">
                                <div class="row bg-white border">

                                    <div class="col-4">
                                        <span class="fs-5 fw-normal mt-4">Lead by</span>
                                        <div class="card border-0 py-5">



                                            <img src="/Image/Capture3.jpg" class="card-img-100 mx-auto d-block rounded-circle" alt="..." style="width: 10rem; height: 10rem">


                                            <div class="card-body text-center">
                                                <h5 class="card-title text-muted fs-5">
                                                    {{$lead->company_name}}
                                                </h5>
                                                <h6 class="card-text text-muted ">{{$lead->owner_name}}</h6>
                                                <h6 class="card-text text-muted">GSTIN: 2352364746</h6>
                                                <h6 class="card-text text-muted">Member Since: {{$lead->created_at}}</h6>

                                            </div>



                                        </div>

                                    </div>

                                    <div class="col-8" >

                                        <div class="row">
                                            <div class="col-12 border" >
                                                <div class="container">

                                                    <div class="container row py-4">
                                                        <div class="col-12 ">
                                                            <h5>Lead Information</h5>
                                                        </div>
                                                        <div class="row my-2">
                                                            <div class="col-xxl-4 col-md-6 col-xl-4 col-lg-4">
                                                                <div class="row">
                                                                    <span>Email</span>
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-6 col-xl-4 col-lg-4">
                                                                <div class="row">
                                                                    <span>Phone</span>
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-12 col-xl-4 col-lg-4 mt-md-3 text-md-center">
                                                                <div class="row">
                                                                    <span>Address</span>
                                                                    <span></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-12 border" >
                                                <div class="container">

                                                    <div class="container row py-4">
                                                        <div class="col-12 ">
                                                            <h5>Additional Leads</h5>
                                                        </div>
                                                        {{--                                                        @if($leadAdditional)--}}



                                                            <div class="row">
                                                                <div class="col-xxl-3 col-md-6 col-xl-6">
                                                                    <div class="row my-2">
                                                                        <span>Branch</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-3 col-md-6 col-xl-6">
                                                                    <div class="row">
                                                                        <span>Address</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-3 col-md-6 col-xl-6">
                                                                    <div class="row">
                                                                        <span>Email</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xxl-3 col-md-6 col-xl-6">
                                                                    <div class="row">
                                                                        <span>phone</span>
                                                                        <span></span>
                                                                    </div>
                                                                </div>
                                                            </div>

{{--                                                        @endforeach--}}

                                                        {{--                                                        @else--}}
                                                        {{--                                                            <h3 class="mt-3">No Additional</h3>--}}
                                                        {{--                                                        @endif--}}
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="col-12 border" >
                                                <div class="container">

                                                    <div class="container row  py-5">
                                                        <div class="col-xxl-2 col-md-6 col-xl-5" style="font-weight: 500">Lead Status:</div>
                                                        <div class="col-xxl-10 col-md-6 col-xl-7 text-muted fs-6">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                                       value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">To Do</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                                       value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox2">Pending</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                                       value="option3">
                                                                <label class="form-check-label" for="inlineCheckbox3">Progress</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                                                       value="option3">
                                                                <label class="form-check-label" for="inlineCheckbox3">Complete</label>
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
            </div>
        </div>

    </div>

@endsection
