@extends('welcome')
@section('content')

    <div class="container-fluid">


        <div class="row" style="background: #F5F5F5; font-family: 'Montserrat', sans-serif">


            @include('menuBar')


            <div class="col-xxl-10 col-xl-9">

                <p class="fs-5 text-muted font-style fw-bold my-4">Leads</p>


                <div class="row" >
                    <div class="col-xxl-9 col-md-12" >
                        <div class="row justify-content-end" >


                            <div class="col-xxl-4 col-md-6 col-lg-5">
                                <div class="row justify-content-end" >
                                    <div class="col-xxl-1 col-md-1 col-lg-1 mx-4" >
                                        <a href="/project/leads/view" class="bi icon-icon bi-grid-3x3-gap bg-white" style="color: #BEBEBE; border: 1px solid #BEBEBE;padding: 4px 8px"></a>
                                    </div>
                                    <div class="col-xxl-2 col-md-2 col-lg-2" >
                                        <a href="/project/lead/details" class="bi icon-icon bi-card-list bg-white " style="color: #BEBEBE; border: 1px solid #BEBEBE;padding: 4px 8px" ></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3"></div>
                </div>

                <div class="row my-2">
                    <div class="col-xxl-9 col-md-12 col-lg-12 col-xl-12" >
                        <div class="row justify-content-between">
                            <div class="col-xxl-6 col-md-6 col-xl-6 col-lg-5" >
                                <div class="row my-1">
                                    <div class="col-xxl-4 col-md-6 col-xl-4">
                                        <div class="dropdown">
                                            <button class="btn btn-white bg-white border dropdown-toggle" style="font-size: 12px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Project Name/ Location
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Shantinagar</a>
                                                <a class="dropdown-item" href="#">Motijheel</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-5 col-md-5 col-xl-5 mx-xxl-2 ">
                                        <button type="button" class="btn btn-white border bg-white w-75  px-md-1 " style="font-size: 12px">Search</button>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xxl-5 col-md-5 col-xl-5 col-lg-5">
                                <div class="row my-1 justify-content-end">

                                    <div class="col-xxl-7 col-md-8">

                                        <div class="row justify-content-end">
                                            <div class="col-xxl-2 col-md-2">
                                                <div class="fs-6 mx-3 fw-normal text-end my-1">Team</div>
                                            </div>
                                            <div class="col-xxl-6 col-md-10 my-1 text-end" >
                                                <img src="#" alt="..." class="rounded-circle border border-dark">
                                                <img src="#" alt="..." class="rounded-circle border border-dark">
                                                <img src="#" alt="..." class="rounded-circle border border-dark">
                                            </div>
                                        </div>

                                    </div>




                                    <div class="col-xxl-4 col-md-4 text-end">

                                        <a href="/project/leads/create" style="text-decoration: none; color: black">
                                            <button type="button" class="btn btn-white border bg-white w-100 fw-bold" style="font-size: 12px">Add Task</button>
                                        </a>


                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                    <div class="col-xxl-3"></div>
                </div>




                <div class="row">
                    <div class="col-xxl-9 col-xl-12">


                        <div class="row g-3">
                            <div class="col-xxl-3 col-xl-3 col-md-6">
                                <div class="  bg-white">
                                    <div class="card border-0 px-2">
                                        <div class="col-12 text-end">
                                            <a href="#" class="bi bi-three-dots text-black text-muted"
                                               style="text-decoration: none;font-size: 25px"></a>
                                        </div>


                                        <a href="/project/employee/details">
                                        <img src="/Image/Capture3.jpg"
                                             class="card-img-100 mx-auto d-block rounded-circle"
                                             alt="..." style="width: 8rem; height: 8rem">
                                        </a>
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-muted"  style="font-size: 15px">Omnex Pvt Ltd</h5>
                                            <h6 class="card-text text-muted"  style="font-size: 12px">Contact Name: Kevin
                                                Milgreen</h6>
                                            <div class="col-12 text-center mt-3">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                            </div>

                                            <div class="col-12 text-center ">
                                                <div class="progress mx-3 text-center my-2 rounded-0"
                                                     style="width: 12rem">
                                                    <div class="progress-bar bg-danger"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="15"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-warning"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="30"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <h6 class="card-text text-muted"  style="font-size: 12px">Due Date: 10/05/22</h6>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-6">
                                <div class="  bg-white">
                                    <div class="card border-0 px-2">
                                        <div class="col-12 text-end">
                                            <a href="#" class="bi bi-three-dots text-black text-muted"
                                               style="text-decoration: none;font-size: 25px"></a>
                                        </div>


                                        <a href="/project/employee/details">
                                            <img src="/Image/Capture3.jpg"
                                                 class="card-img-100 mx-auto d-block rounded-circle"
                                                 alt="..." style="width: 8rem; height: 8rem">
                                        </a>
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-muted"  style="font-size: 15px">Omnex Pvt Ltd</h5>
                                            <h6 class="card-text text-muted"  style="font-size: 12px">Contact Name: Kevin
                                                Milgreen</h6>
                                            <div class="col-12 text-center mt-3">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                            </div>

                                            <div class="col-12 text-center ">
                                                <div class="progress mx-3 text-center my-2 rounded-0"
                                                     style="width: 12rem">
                                                    <div class="progress-bar bg-danger"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="15"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-warning"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="30"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <h6 class="card-text text-muted"  style="font-size: 12px">Due Date: 10/05/22</h6>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-6">
                                <div class="  bg-white">
                                    <div class="card border-0 px-2">
                                        <div class="col-12 text-end">
                                            <a href="#" class="bi bi-three-dots text-black text-muted"
                                               style="text-decoration: none;font-size: 25px"></a>
                                        </div>


                                        <a href="/project/employee/details">
                                            <img src="/Image/Capture3.jpg"
                                                 class="card-img-100 mx-auto d-block rounded-circle"
                                                 alt="..." style="width: 8rem; height: 8rem">
                                        </a>
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-muted"  style="font-size: 15px">Omnex Pvt Ltd</h5>
                                            <h6 class="card-text text-muted"  style="font-size: 12px">Contact Name: Kevin
                                                Milgreen</h6>
                                            <div class="col-12 text-center mt-3">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                            </div>

                                            <div class="col-12 text-center ">
                                                <div class="progress mx-3 text-center my-2 rounded-0"
                                                     style="width: 12rem">
                                                    <div class="progress-bar bg-danger"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="15"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-warning"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="30"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <h6 class="card-text text-muted"  style="font-size: 12px">Due Date: 10/05/22</h6>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-6">
                                <div class="  bg-white">
                                    <div class="card border-0 px-2">
                                        <div class="col-12 text-end">
                                            <a href="#" class="bi bi-three-dots text-black text-muted"
                                               style="text-decoration: none;font-size: 25px"></a>
                                        </div>


                                        <a href="/project/employee/details">
                                            <img src="/Image/Capture3.jpg"
                                                 class="card-img-100 mx-auto d-block rounded-circle"
                                                 alt="..." style="width: 8rem; height: 8rem">
                                        </a>
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-muted"  style="font-size: 15px">Omnex Pvt Ltd</h5>
                                            <h6 class="card-text text-muted"  style="font-size: 12px">Contact Name: Kevin
                                                Milgreen</h6>
                                            <div class="col-12 text-center mt-3">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                            </div>

                                            <div class="col-12 text-center ">
                                                <div class="progress mx-3 text-center my-2 rounded-0"
                                                     style="width: 12rem">
                                                    <div class="progress-bar bg-danger"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="15"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-warning"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="30"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <h6 class="card-text text-muted"  style="font-size: 12px">Due Date: 10/05/22</h6>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-6">
                                <div class="  bg-white">
                                    <div class="card border-0 px-2">
                                        <div class="col-12 text-end">
                                            <a href="#" class="bi bi-three-dots text-black text-muted"
                                               style="text-decoration: none;font-size: 25px"></a>
                                        </div>


                                        <a href="/project/employee/details">
                                            <img src="/Image/Capture3.jpg"
                                                 class="card-img-100 mx-auto d-block rounded-circle"
                                                 alt="..." style="width: 8rem; height: 8rem">
                                        </a>
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-muted"  style="font-size: 15px">Omnex Pvt Ltd</h5>
                                            <h6 class="card-text text-muted"  style="font-size: 12px">Contact Name: Kevin
                                                Milgreen</h6>
                                            <div class="col-12 text-center mt-3">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                            </div>

                                            <div class="col-12 text-center ">
                                                <div class="progress mx-3 text-center my-2 rounded-0"
                                                     style="width: 12rem">
                                                    <div class="progress-bar bg-danger"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="15"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-warning"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="30"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <h6 class="card-text text-muted"  style="font-size: 12px">Due Date: 10/05/22</h6>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-6">
                                <div class="  bg-white">
                                    <div class="card border-0 px-2">
                                        <div class="col-12 text-end">
                                            <a href="#" class="bi bi-three-dots text-black text-muted"
                                               style="text-decoration: none;font-size: 25px"></a>
                                        </div>


                                        <a href="/project/employee/details">
                                            <img src="/Image/Capture3.jpg"
                                                 class="card-img-100 mx-auto d-block rounded-circle"
                                                 alt="..." style="width: 8rem; height: 8rem">
                                        </a>
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-muted"  style="font-size: 15px">Omnex Pvt Ltd</h5>
                                            <h6 class="card-text text-muted"  style="font-size: 12px">Contact Name: Kevin
                                                Milgreen</h6>
                                            <div class="col-12 text-center mt-3">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                            </div>

                                            <div class="col-12 text-center ">
                                                <div class="progress mx-3 text-center my-2 rounded-0"
                                                     style="width: 12rem">
                                                    <div class="progress-bar bg-danger"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="15"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-warning"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="30"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <h6 class="card-text text-muted"  style="font-size: 12px">Due Date: 10/05/22</h6>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-6">
                                <div class="  bg-white">
                                    <div class="card border-0 px-2">
                                        <div class="col-12 text-end">
                                            <a href="#" class="bi bi-three-dots text-black text-muted"
                                               style="text-decoration: none;font-size: 25px"></a>
                                        </div>


                                        <a href="/project/employee/details">
                                            <img src="/Image/Capture3.jpg"
                                                 class="card-img-100 mx-auto d-block rounded-circle"
                                                 alt="..." style="width: 8rem; height: 8rem">
                                        </a>
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-muted"  style="font-size: 15px">Omnex Pvt Ltd</h5>
                                            <h6 class="card-text text-muted"  style="font-size: 12px">Contact Name: Kevin
                                                Milgreen</h6>
                                            <div class="col-12 text-center mt-3">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                            </div>

                                            <div class="col-12 text-center ">
                                                <div class="progress mx-3 text-center my-2 rounded-0"
                                                     style="width: 12rem">
                                                    <div class="progress-bar bg-danger"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="15"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-warning"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="30"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <h6 class="card-text text-muted"  style="font-size: 12px">Due Date: 10/05/22</h6>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-md-6">
                                <div class="  bg-white">
                                    <div class="card border-0 px-2">
                                        <div class="col-12 text-end">
                                            <a href="#" class="bi bi-three-dots text-black text-muted"
                                               style="text-decoration: none;font-size: 25px"></a>
                                        </div>


                                        <a href="/project/employee/details">
                                            <img src="/Image/Capture3.jpg"
                                                 class="card-img-100 mx-auto d-block rounded-circle"
                                                 alt="..." style="width: 8rem; height: 8rem">
                                        </a>
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-muted"  style="font-size: 15px">Omnex Pvt Ltd</h5>
                                            <h6 class="card-text text-muted"  style="font-size: 12px">Contact Name: Kevin
                                                Milgreen</h6>
                                            <div class="col-12 text-center mt-3">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                                <img src="#" alt="..."
                                                     class="rounded-circle border border-dark">
                                            </div>

                                            <div class="col-12 text-center ">
                                                <div class="progress mx-3 text-center my-2 rounded-0"
                                                     style="width: 12rem">
                                                    <div class="progress-bar bg-danger"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="15"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-warning"
                                                         role="progressbar"
                                                         style="width: 100%" aria-valuenow="30"
                                                         aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>

                                            <h6 class="card-text text-muted"  style="font-size: 12px">Due Date: 10/05/22</h6>

                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-xxl-3">

                        <div class="container-fluid mt-md-4 mt-xxl-0">
                            <div class="row  justify-content-evenly">
                                <div class="col-xxl-12 col-xl-5 col-md-5">
                                    <div class="row" >
                                        <div class="col-12 border " style="background: #F6B301; padding: 18px">
                                            <div class="fw-bold">Working Graph</div>
                                        </div>
                                        <div class="col-12 bg-white" >
                                            <div id="working_graph" style="width: 100%; height: 100%; padding: 18px"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xxl-12 mt-xxl-4 col-xl-5 col-md-5">
                                    <div class="row">
                                        <div class="col-xxl-12 border " style="background: #F6B301;padding: 18px">
                                            <div class="fw-bold">Success Rate</div>
                                        </div>
                                        <div class="col-xxl-12 bg-white">

                                            <div id="success_rate" style="width: 100%; height: 100%; padding: 18px"></div>

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
