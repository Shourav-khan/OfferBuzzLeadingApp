
@extends('welcome')
@section('content')
    <div class="container-fluid" >





        <div class="row" style="background: #F5F5F5; font-family: 'Montserrat', sans-serif">


          @include('menuBar')

            <div class="col-md-12 col-lg-12 col-xxl-10 col-xl-9 pe-xxl-4">

                <div class="row row-cols-4 px-1">

                    <div class="col-md-12 col-xl-12 col-lg-12">

                            <div class="row row-cols-4 g-2 my-3">
                                <div class="col-xxl-3  col-md-6">
                                    <div class="p-3 rounded bg-white">
                                        <div class="row">
                                            <h6>Today's Lead</h6>

                                            <div class="col-xl-4 col-md-2">
                                                <i class="bi icon-icon bi-briefcase-fill "></i>
                                            </div>
                                            <div class="col-xl-2 col-md-3 text-center" style="letter-spacing: -2px">
                                                <div class="fs-6">10</div>
                                                <div class="fs-6">Pending</div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 text-center align-self-end" style="letter-spacing: -1px">
                                                <div class="fs-6">10</div>
                                                <div class="fs-6 mx-1">Completed</div>
                                            </div>
                                            <div class="col-xl-3 col-md-3 text-center" style="letter-spacing: -1px">
                                                <i class="bi bi-pie-chart-fill"></i>
                                                <div class="fs-6">Progress</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 rounded bg-white">
                                        <div class="row">
                                            <h6>Today's Visit</h6>

                                            <div class="col-xl-6 col-md-4">
                                                <i class="bi icon-icon bi-geo-alt"></i>
                                            </div>
                                            <div class="col-xl-3 col-md-4 text-center" style="letter-spacing: -1px">
                                                <div class="fs-6">10</div>
                                                <div class="fs-6">Pending</div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 text-center align-self-end" style="letter-spacing: -1px">
                                                <div class="fs-6">10</div>
                                                <div class="fs-6">Completed</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 rounded bg-white">
                                        <div class="row">
                                            <h6>Today's Meeting</h6>

                                            <div class="col-xl-6 col-md-4">
                                                <i class="bi icon-icon bi-people"></i>
                                            </div>
                                            <div class="col-xl-3 col-md-4 text-center" style="letter-spacing: -1px">
                                                <div class="fs-6">10</div>
                                                <div class="fs-6">Pending</div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 text-center align-self-end" style="letter-spacing: -1px">
                                                <div class="fs-6">10</div>
                                                <div class="fs-6">Completed</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 rounded bg-white">
                                        <div class="row">
                                            <h6>Today's Lead</h6>

                                            <div class="col-xl-4 col-md-2">
                                                <i class="bi icon-icon bi-briefcase-fill"></i>
                                            </div>
                                            <div class="col-xl-2 col-md-3 text-center" style="letter-spacing: -2px">
                                                <div class="fs-6">10</div>
                                                <div class="fs-6">Pending</div>
                                            </div>
                                            <div class="col-xl-3 col-md-4 text-center align-self-end" style="letter-spacing: -1px">
                                                <div class="fs-6">10</div>
                                                <div class="fs-6 mx-1">Completed</div>
                                            </div>
                                            <div class="col-xl-2 col-md-3 text-center" style="letter-spacing: -1px">
                                                <i class="bi bi-pie-chart-fill"></i>
                                                <div class="fs-6">Progress</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                    </div>
                </div>
                <div class="row row-cols-3" >
                    <div class="col-xl-12 col-md-12 col-lg-12">

                            <div class="row g-2">
                                <div class="col-xxl-3 col-xl-12 col-md-12 col-lg-12">
                                    <div class="p-3 rounded bg-white mx-1" style="border-bottom:5px solid #F5F5F5"><h6>Target</h6></div>
                                    <div class="row mx-1">
                                        <div class="bg-white " >
{{--                                    <div class="Target p-4 rounded bg-white  " style="height: 14rem;">--}}
{{--                                        {{$chart->container()}}--}}
{{--                                    </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-12 col-md-12 col-lg-12">
                                    <div class="p-3 rounded bg-white"><h6>Lead Report Graph</h6></div>
                                    <div class="p-3 rounded bg-white my-1">

                                        <div id="barchart_material"  class="leadReportGraph"></div>

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-12 col-md-12 col-lg-12">
                                    <div class="p-3 rounded bg-white "><h6>Lead Achievement</h6></div>
                                    <div class="p-3 rounded bg-white my-1">
                                        <div class="row" style="height: 12rem">
                                            <div class="col-12">
                                                <div class="progress">
                                                    <div class="progress-bar bg-secondary" role="progressbar"
                                                         style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-warning" role="progressbar"
                                                         style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-danger" role="progressbar"
                                                         style="width: 35%" aria-valuenow="20" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                         style="width: 80%" aria-valuenow="20" aria-valuemin="0"
                                                         aria-valuemax="100"></div>
                                                </div>
                                            </div>


                                            <div class="col-12 mt-2">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="row mt-2">
                                                            <div class="col-1 my-1">
                                                                <span class="dot" style="background: #0D6EFD"></span>
                                                            </div>
                                                            <div class="col-11 text-start ">Lead Applications</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-2 mt-1">
                                                        <div class="dot-1 text-center  text-white pb-4"
                                                             style="background: #9EC5FE">00%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="row mt-2">
                                                            <div class="col-1 my-1">
                                                                <span class="dot" style="background: #FFC107"></span>
                                                            </div>
                                                            <div class="col-11 text-start ">Lead Progress</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-2 mt-1">
                                                        <div class="dot-1 text-center  text-white pb-4"
                                                             style="background: #FFE69C">00%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-2">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="row mt-2">
                                                            <div class="col-1 my-1">
                                                                <span class="dot" style="background: #DC3545"></span>
                                                            </div>
                                                            <div class="col-11 text-start ">Lead Completed</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-2 mt-1">
                                                        <div class="dot-1 text-center  text-white pb-4"
                                                             style="background: #F1AEB5">00%
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 mt-2">
                                                <div class="row">
                                                    <div class="col-10">
                                                        <div class="row mt-2">
                                                            <div class="col-1 my-1">
                                                                <span class="dot" style="background: #6C757D"></span>
                                                            </div>
                                                            <div class="col-11 text-start ">Lead Reject</div>
                                                        </div>

                                                    </div>
                                                    <div class="col-2 mt-1">
                                                        <div class="dot-1 text-center  text-white pb-4"
                                                             style="background: #CED4DA">00%
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
                <div class="row row-cols-2 mt-2" >
                    <div class="col-12 my-2">

                            <div class="row g-2 px-1">
                                <div class="col-xxl-6 col-md-12">
                                    <div class="p-3  rounded bg-white "><h6>Overall Growth</h6></div>
                                    <div class="p-3  rounded bg-white my-1">
                                        <div id="barchart_material1" class="barChart2"></div>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-12">
                                    <div class="  rounded bg-white">
                                        <div class="row">
                                            <div class="col-xl-10 col-md-9">
                                                <div class="p-2 my-2 mx-2 bg-white"><h6>Employee Progress</h6></div>
                                            </div>
                                            <div class="col-xl-2 col-md-3">
                                                <div class="p-3  bg-white fs-6">Monthly</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3  rounded bg-white my-1">

                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Progress</th>
                                            </tr>
                                            </thead>
                                            <tbody>



                                            @for($i=0; $i<3; $i++ )
                                            <tr>
                                                <td>
                                                    <img src="https://cdn.pixabay.com/photo/2014/07/09/10/04/man-388104_640.jpg" class="img-thumbnail rounded-circle" alt="..."
                                                         style="height: 35px; width: 35px;">
                                                    <span class="fs-6">Dom Sibley</span>
                                                </td>
                                                <td>Sales Manager</td>
                                                <td>Shantinagar</td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 70%" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endfor




                                            </tbody>
                                        </table>


                                    </div>
                                </div>

                            </div>

                    </div>
                </div>
                <div class="row row-cols-3 mt-1">
                    <div class="col-xl-12 col-md-12">


                            <div class="row g-2 px-1">
                                <div class="col-xxl-4 col-md-12">
                                    <div class="  rounded bg-white ">
                                        <div class="row justify-content-between">
                                            <div class="col-xxl-6 col-xl-8 col-md-8">
                                                <div class="p-2 mx-2 my-2 "><h6>Recent Activity</h6></div>
                                            </div>
                                            <div class=" col-xxl-6 col-xl-4 col-md-4">
                                                <div class="text-end p-2 mx-2 my-2 ">See More</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3  rounded bg-white my-1">

                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12">
                                                    <table class="table table-borderless">

                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                           id="customCheck1" checked>

                                                                </div>
                                                            </td>
                                                            <th>Company</th>
                                                            <th>Contact Person</th>
                                                            <th>Agreement</th>
                                                            <th>Lead By</th>
                                                            <th>Date</th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                           id="customCheck2">

                                                                </div>
                                                            </td>
                                                            <td>Walmart</td>
                                                            <td>David Boss</td>
                                                            <td>In Progress</td>
                                                            <td>Joe Root</td>
                                                            <td>7/4/22</td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-12">
                                    <div class="p-3  rounded bg-white"><h6>Team Progress</h6></div>
                                    <div class="p-3  rounded bg-white my-1">

                                        <div class="container-fluid">
                                            <table class="table table-borderless">
                                                <tbody>

                                                <tr class="row">
                                                    <td class="col-sm-4">Alfa Team</td>
                                                    <td class="col-sm-8">

                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                 style="width: 70%" aria-valuenow="15" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>

                                                    </td>

                                                </tr>

                                                <tr class="row">
                                                    <td class="col-sm-4">Delta Team</td>
                                                    <td class="col-sm-8">

                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                 style="width: 50%" aria-valuenow="15" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: 25%" aria-valuenow="30" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>

                                                    </td>

                                                </tr>

                                                <tr class="row">
                                                    <td class="col-sm-4">Delta Team</td>
                                                    <td class="col-sm-8">

                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar"
                                                                 style="width: 40%" aria-valuenow="15" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                            <div class="progress-bar bg-warning" role="progressbar"
                                                                 style="width: 20%" aria-valuenow="30" aria-valuemin="0"
                                                                 aria-valuemax="100"></div>
                                                        </div>

                                                    </td>

                                                </tr>


                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-12">
                                    <div class="  rounded bg-white">
                                        <div class="row justify-content-evenly">
                                            <div class="col-xxl-6">
                                                <div class="p-2 mx-2 my-2 bg-white"><h6>Training Schedule</h6></div>
                                            </div>
                                            <div class="col-xxl-6 text-end">
                                                <div class="p-3 mx-4 bg-white fs-6">See More</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-white my-1">


                                        <table class="table table-borderless">
                                            <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Employee</th>
                                                <th scope="col">Trainer</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Time</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">#23</th>
                                                <td>David Smith</td>
                                                <td>Jean Rayes</td>
                                                <td>7/4/22</td>
                                                <td>3.00pm</td>
                                            </tr>

                                            <tr>
                                                <th scope="row">#23</th>
                                                <td>David Smith</td>
                                                <td>Jean Rayes</td>
                                                <td>7/4/22</td>
                                                <td>3.00pm</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                    </div>
                </div>

            </div>
        </div>
        </div>


@endsection


