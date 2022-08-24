@extends('welcome')
@section('content')

    <div class="container-fluid">



        <div class="row" style="background: #F5F5F5">
            {{--<--menuBar-->--}}
            @include('menuBar')
            {{--Table part--}}

            <div class="col-xxl-10 col-xl-9">


                <p class="fs-5 text-muted font-style fw-bold my-4">Projects</p>


                <div class=" row" >

                    <div class="col-xxl-10 col-md-12" >
                        <div class="row justify-content-end" >


                            <div class="col-xxl-5">
                                <div class="row justify-content-end" >
                                    <div class="col-xxl-2 col-md-1 col-lg-1 text-end ml-lg-5 align-self-lg-center" >
                                        <button  class="myBtn bi icon-icon bi-grid-3x3-gap  bg-white" onclick="Button(0); Grid();"  style="color: #BEBEBE; border: 1px solid #BEBEBE;padding: 2px 6px"></button>
                                    </div>
                                    <div class="col-xxl-2 col-md-1 col-lg-1 text-start ml-lg-5 align-self-lg-center" >
                                        <button class="myBtn bi icon-icon bi-card-list bg-white" onclick="Button(1);List();" style="color: #BEBEBE; border: 1px solid #BEBEBE;padding: 2px 6px" ></button>
                                    </div>
                                    <div class="col-xxl-4 col-md-3 col-lg-2 text-end " >
                                        <button type="button" class="btn bg-white btn-md border-danger" ><a href="/project/create" style="color: black;text-decoration: none " class="text-muted">Create Project</a></button>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="col-xxl-2"></div>

                </div>

                <div class="row my-4">
                    <div class="col-xxl-10">



                            <div id="griding" class="row g-2">


                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 border bg-white">

                                        <div class="row">
                                            <div class="col-10">
                                                <span class="text-muted"><a href="#" class="text-black text-muted " style="text-decoration: none">10/02/22</a></span>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" class="bi bi-three-dots text-black text-muted" style="text-decoration: none;font-size: 25px" ></a>
                                            </div>


                                            <div class="row mt-2 text-center">
                                                <div class="col-12  rounded">
                                                    <span class="text-muted">Project Name</span>
                                                    <h5 class="text-center text-muted " style="letter-spacing: 1px">Simple Project</h5>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                </div>

                                                <div class="col-6 mx-4">
                                                    <div class="progress mx-3 text-center my-2 rounded-0" style="width: 12rem">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 100%" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="row row-cols-3 text-muted" style="font-size: 11px">
                                                    <div class="col-5 text-center mt-4">Add People</div>
                                                    <div class="col-5 text-center mt-4">Create Task</div>
                                                    <div class="col-2 text-center mt-4">Comment</div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 border bg-white">

                                        <div class="row">
                                            <div class="col-10">
                                                <span class="text-muted"><a href="#" class="text-black text-muted " style="text-decoration: none">10/02/22</a></span>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" class="bi bi-three-dots text-black text-muted" style="text-decoration: none;font-size: 25px" ></a>
                                            </div>


                                            <div class="row mt-2 text-center">
                                                <div class="col-12  rounded">
                                                    <span class="text-muted">Project Name</span>
                                                    <h5 class="text-center text-muted " style="letter-spacing: 1px">Simple Project</h5>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                </div>

                                                <div class="col-6 mx-4">
                                                    <div class="progress mx-3 text-center my-2 rounded-0" style="width: 12rem">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 100%" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="row row-cols-3 text-muted" style="font-size: 11px">
                                                    <div class="col-5 text-center mt-4">Add People</div>
                                                    <div class="col-5 text-center mt-4">Create Task</div>
                                                    <div class="col-2 text-center mt-4">Comment</div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 border bg-white">

                                        <div class="row">
                                            <div class="col-10">
                                                <span class="text-muted"><a href="#" class="text-black text-muted " style="text-decoration: none">10/02/22</a></span>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" class="bi bi-three-dots text-black text-muted" style="text-decoration: none;font-size: 25px" ></a>
                                            </div>


                                            <div class="row mt-2 text-center">
                                                <div class="col-12  rounded">
                                                    <span class="text-muted">Project Name</span>
                                                    <h5 class="text-center text-muted " style="letter-spacing: 1px">Simple Project</h5>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                </div>

                                                <div class="col-6 mx-4">
                                                    <div class="progress mx-3 text-center my-2 rounded-0" style="width: 12rem">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 100%" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="row row-cols-3 text-muted" style="font-size: 11px">
                                                    <div class="col-5 text-center mt-4">Add People</div>
                                                    <div class="col-5 text-center mt-4">Create Task</div>
                                                    <div class="col-2 text-center mt-4">Comment</div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 border bg-white">

                                        <div class="row">
                                            <div class="col-10">
                                                <span class="text-muted"><a href="#" class="text-black text-muted " style="text-decoration: none">10/02/22</a></span>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" class="bi bi-three-dots text-black text-muted" style="text-decoration: none;font-size: 25px" ></a>
                                            </div>


                                            <div class="row mt-2 text-center">
                                                <div class="col-12  rounded">
                                                    <span class="text-muted">Project Name</span>
                                                    <h5 class="text-center text-muted " style="letter-spacing: 1px">Simple Project</h5>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                </div>

                                                <div class="col-6 mx-4">
                                                    <div class="progress mx-3 text-center my-2 rounded-0" style="width: 12rem">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 100%" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="row row-cols-3 text-muted" style="font-size: 11px">
                                                    <div class="col-5 text-center mt-4">Add People</div>
                                                    <div class="col-5 text-center mt-4">Create Task</div>
                                                    <div class="col-2 text-center mt-4">Comment</div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 border bg-white">

                                        <div class="row">
                                            <div class="col-10">
                                                <span class="text-muted"><a href="#" class="text-black text-muted " style="text-decoration: none">10/02/22</a></span>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" class="bi bi-three-dots text-black text-muted" style="text-decoration: none;font-size: 25px" ></a>
                                            </div>


                                            <div class="row mt-2 text-center">
                                                <div class="col-12  rounded">
                                                    <span class="text-muted">Project Name</span>
                                                    <h5 class="text-center text-muted " style="letter-spacing: 1px">Simple Project</h5>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                </div>

                                                <div class="col-6 mx-4">
                                                    <div class="progress mx-3 text-center my-2 rounded-0" style="width: 12rem">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 100%" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="row row-cols-3 text-muted" style="font-size: 11px">
                                                    <div class="col-5 text-center mt-4">Add People</div>
                                                    <div class="col-5 text-center mt-4">Create Task</div>
                                                    <div class="col-2 text-center mt-4">Comment</div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 border bg-white">

                                        <div class="row">
                                            <div class="col-10">
                                                <span class="text-muted"><a href="#" class="text-black text-muted " style="text-decoration: none">10/02/22</a></span>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" class="bi bi-three-dots text-black text-muted" style="text-decoration: none;font-size: 25px" ></a>
                                            </div>


                                            <div class="row mt-2 text-center">
                                                <div class="col-12  rounded">
                                                    <span class="text-muted">Project Name</span>
                                                    <h5 class="text-center text-muted " style="letter-spacing: 1px">Simple Project</h5>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                </div>

                                                <div class="col-6 mx-4">
                                                    <div class="progress mx-3 text-center my-2 rounded-0" style="width: 12rem">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 100%" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="row row-cols-3 text-muted" style="font-size: 11px">
                                                    <div class="col-5 text-center mt-4">Add People</div>
                                                    <div class="col-5 text-center mt-4">Create Task</div>
                                                    <div class="col-2 text-center mt-4">Comment</div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 border bg-white">

                                        <div class="row">
                                            <div class="col-10">
                                                <span class="text-muted"><a href="#" class="text-black text-muted " style="text-decoration: none">10/02/22</a></span>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" class="bi bi-three-dots text-black text-muted" style="text-decoration: none;font-size: 25px" ></a>
                                            </div>


                                            <div class="row mt-2 text-center">
                                                <div class="col-12  rounded">
                                                    <span class="text-muted">Project Name</span>
                                                    <h5 class="text-center text-muted " style="letter-spacing: 1px">Simple Project</h5>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                </div>

                                                <div class="col-6 mx-4">
                                                    <div class="progress mx-3 text-center my-2 rounded-0" style="width: 12rem">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 100%" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="row row-cols-3 text-muted" style="font-size: 11px">
                                                    <div class="col-5 text-center mt-4">Add People</div>
                                                    <div class="col-5 text-center mt-4">Create Task</div>
                                                    <div class="col-2 text-center mt-4">Comment</div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-3 col-md-6">
                                    <div class="p-3 border bg-white">

                                        <div class="row">
                                            <div class="col-10">
                                                <span class="text-muted"><a href="#" class="text-black text-muted " style="text-decoration: none">10/02/22</a></span>
                                            </div>
                                            <div class="col-2">
                                                <a href="#" class="bi bi-three-dots text-black text-muted" style="text-decoration: none;font-size: 25px" ></a>
                                            </div>


                                            <div class="row mt-2 text-center">
                                                <div class="col-12  rounded">
                                                    <span class="text-muted">Project Name</span>
                                                    <h5 class="text-center text-muted " style="letter-spacing: 1px">Simple Project</h5>
                                                </div>
                                                <div class="col-12  mt-3">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                    <img src="#" alt="..." class="rounded-circle border border-dark">
                                                </div>

                                                <div class="col-6 mx-4">
                                                    <div class="progress mx-3 text-center my-2 rounded-0" style="width: 12rem">
                                                        <div class="progress-bar bg-danger" role="progressbar"
                                                             style="width: 100%" aria-valuenow="15" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                             style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                                             aria-valuemax="100"></div>
                                                    </div>
                                                </div>

                                                <div class="row row-cols-3 text-muted" style="font-size: 11px">
                                                    <div class="col-5 text-center mt-4">Add People</div>
                                                    <div class="col-5 text-center mt-4">Create Task</div>
                                                    <div class="col-2 text-center mt-4">Comment</div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>

                        <div id="listing" style="display: none">
                            <table class="table table-striped table-borderless table-curved">
                                <thead class="thead">
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Project</th>
                                    <th scope="col">Assigned</th>
                                    <th scope="col">Due Date</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">Target/Object</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody class="tbody text-center">


                                <tr>
                                    <td scope="row">01</td>
                                    <td>Simple Project</td>
                                    <td>
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">

                                    </td>
                                    <td>06/03/21</td>
                                    <td>06/03/21</td>
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
                                    <td>

                                        <div class="row">
                                            <div class="col-xxl-6 col-md-5"><a href="/project/overview" style="color: black; text-decoration: none">Edit</a></div>
                                            <div class="col-xxl-6 col-md-5"><a href="/project/overview" style="color: black; text-decoration: none">View</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">01</td>
                                    <td>Simple Project</td>
                                    <td>
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">

                                    </td>
                                    <td>06/03/21</td>
                                    <td>06/03/21</td>
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
                                    <td>

                                        <div class="row">
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">Edit</a></div>
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">View</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">01</td>
                                    <td>Simple Project</td>
                                    <td>
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">

                                    </td>
                                    <td>06/03/21</td>
                                    <td>06/03/21</td>
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
                                    <td>

                                        <div class="row">
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">Edit</a></div>
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">View</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">01</td>
                                    <td>Simple Project</td>
                                    <td>
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">

                                    </td>
                                    <td>06/03/21</td>
                                    <td>06/03/21</td>
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
                                    <td>

                                        <div class="row">
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">Edit</a></div>
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">View</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">01</td>
                                    <td>Simple Project</td>
                                    <td>
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">

                                    </td>
                                    <td>06/03/21</td>
                                    <td>06/03/21</td>
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
                                    <td>

                                        <div class="row">
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">Edit</a></div>
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">View</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">01</td>
                                    <td>Simple Project</td>
                                    <td>
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">

                                    </td>
                                    <td>06/03/21</td>
                                    <td>06/03/21</td>
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
                                    <td>

                                        <div class="row">
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">Edit</a></div>
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">View</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">01</td>
                                    <td>Simple Project</td>
                                    <td>
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">

                                    </td>
                                    <td>06/03/21</td>
                                    <td>06/03/21</td>
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
                                    <td>

                                        <div class="row">
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">Edit</a></div>
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">View</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">01</td>
                                    <td>Simple Project</td>
                                    <td>
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">

                                    </td>
                                    <td>06/03/21</td>
                                    <td>06/03/21</td>
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
                                    <td>

                                        <div class="row">
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">Edit</a></div>
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">View</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">01</td>
                                    <td>Simple Project</td>
                                    <td>
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">

                                    </td>
                                    <td>06/03/21</td>
                                    <td>06/03/21</td>
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
                                    <td>

                                        <div class="row">
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">Edit</a></div>
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">View</a></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">01</td>
                                    <td>Simple Project</td>
                                    <td>
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">
                                        <img src="#" alt="..." class="rounded-circle border border-dark">

                                    </td>
                                    <td>06/03/21</td>
                                    <td>06/03/21</td>
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
                                    <td>

                                        <div class="row">
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">Edit</a></div>
                                            <div class="col-6"><a href="/project/overview" style="color: black; text-decoration: none">View</a></div>
                                        </div>
                                    </td>
                                </tr>







                                </tbody>
                            </table>
                        </div>





                    </div>

                    <div class="col-xxl-2 ">
                        <div class="px-3 " >
                            <div class="row gy-2">
                                <div class="col-xxl-12 col-md-6 col-xl-6" >
                                    <div class="p-1 bg-white rounded-3">
                                        <div class="row justify-content-evenly" style="border: none; ">
                                            <div class="col-4 align-self-center"><a href="#" class="bi bi-watch " style="font-size: 40px; color: #707070"></a></div>
                                            <div class="col-4  align-self-center my-1">
                                                <h3 class="fs-2 text-muted font-style">3</h3>
                                                <p class="text-muted font-style" style="font-size: 18px">Due</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-12 col-md-6 col-xl-6">
                                    <div class="p-2 bg-white rounded-3"  >
                                        <div class="row justify-content-evenly" style="border: none">
                                            <div class="col-4 align-self-center"><a href="#" class="bi bi-arrow-left-right" style="font-size: 40px; color: #707070"></a></div>
                                            <div class="col-4  align-self-center my-1">
                                                <h3 class="fs-2 text-muted">10</h3>
                                                <p class="text-muted font-style" style="font-size: 18px">Progress</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-6 col-xl-6">
                                    <div class="p-1 bg-white rounded-3">
                                        <div class="row justify-content-evenly" style="border: none">
                                            <div class="col-4 align-self-center"><a href="#" class="bi bi-flag " style="font-size: 40px; color: #707070"></a></div>
                                            <div class="col-4  align-self-center my-1">
                                                <h3 class="fs-2 text-muted font-style">20</h3>
                                                <p class="font-style text-muted" style="font-size: 18px">Finished</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xxl-12 col-md-6 col-xl-6" >
                                    <div class="p-1 bg-white rounded-3">
                                        <div class="row justify-content-evenly" style="border: none">
                                            <div class="col-4 align-self-center"><a href="#" class="bi bi-briefcase" style="font-size: 40px; color: #707070"></a></div>
                                            <div class="col-4 align-self-center my-1">
                                                <h3 class="fs-2  text-muted font-style">80</h3>
                                                <p class="font-style text-muted" style="font-size: 18px">Total</p>
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
