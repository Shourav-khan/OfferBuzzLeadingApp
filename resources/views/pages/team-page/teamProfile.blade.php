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


                                <a href="{{route('team.detail')}}" class="bi bi-arrow-left fs-2 text-black d-md-none d-lg-none d-xl-block"></a>


                                <div class="row mt-2 mx-5">
                                    <div class="col-5">
                                        <li class="breadcrumb-item "><a href="#" class="text-black text-decoration-none">Team</a></li>
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
                        <a href="/team/name" class="bi bi-x fs-2 text-black "></a>
                    </div>
                </div>

                <div class="container-fluid row mt-2">
                    <div class="col-12">


                        <div class="row">
                            <div class="col-12">
                                <div class="row bg-white border">

                                    <div class="col-4">
                                        <span class="fs-5 fw-normal mt-4">Profile</span>
                                        <div class="card border-0 py-5">



                                            <img src="https://img.freepik.com/free-photo/close-up-young-successful-man-smiling-camera-standing-casual-outfit-against-blue-background_1258-66609.jpg?w=2000" class="card-img-100 mx-auto d-block rounded-circle" alt="..." style="width: 10rem; height: 10rem">
                                            <div class="card-body text-center">
                                                <h5 class="card-title text-muted">Employee Name: Stephen</h5>
                                                <h6 class="card-text text-muted">Team Name: Alfa Team</h6>
                                                <h6 class="card-text text-muted">Location: Shantinagar</h6>
                                                <h6 class="card-text text-muted">Join Date: 12/05/22</h6>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-8" >

                                        <div class="row">
                                            <div class="col-12 border" >
                                                <div class="container">

                                                    <div class="container row py-4">
                                                        <div class="col-12 ">
                                                            <h5>Official Information</h5>
                                                        </div>
                                                        <div class="row my-2">
                                                            <div class="col-xxl-4 col-md-6 col-xl-4 col-lg-4">
                                                                <div class="row">
                                                                    <span>Email</span>
                                                                    <span>*****@email.com</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-6 col-xl-4 col-lg-4">
                                                                <div class="row">
                                                                    <span>Phone</span>
                                                                    <span>01625626787</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-md-12 col-xl-4 col-lg-4 mt-md-3 mt-xl-0 text-md-center">
                                                                <div class="row">
                                                                    <span>Address</span>
                                                                    <span>Shantinagar</span>
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
                                                            <h5>Team Name</h5>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xxl-3 col-md-6 col-xl-6">
                                                                <div class="row my-2">
                                                                    <span>Team Leader</span>
                                                                    <span>Deep Hasan</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6 col-xl-6">
                                                                <div class="row">
                                                                    <span>Zone </span>
                                                                    <span>Shantinagar</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6 col-xl-6">
                                                                <div class="row">
                                                                    <span>Team Target</span>
                                                                    <span>200</span>
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

                                                    <div class="container row  py-4">
                                                        <div class="col-12">
                                                            <h5>Employee Progress</h5>
                                                        </div>
                                                        <div class="row my-2 ">
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div class="row">
                                                                    <span>Project</span>
                                                                    <span>Simple Project</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-6">
                                                                <div class="row">
                                                                    <span>Location </span>
                                                                    <span>Shantinagar</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-2 col-md-6 my-md-3 my-xxl-0">
                                                                <div class="row">
                                                                    <span>Target </span>
                                                                    <span>05</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-2 col-md-6 my-md-3 my-xxl-0">
                                                                <div class="row">
                                                                    <span>Lead</span>
                                                                    <span>40</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-2 col-md-6 my-md-3 my-xxl-0">
                                                                <div class="row">
                                                                    <span>Achievement</span>
                                                                    <span>05</span>
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
    </div>

@endsection
