@extends('welcome')
@section('content')


    <div class="">
        <div class="container-fluid ">



            <div class="row" style="background: #F5F5F5">

                @include('menuBar')


                <div class="col-xxl-10 col-xl-9">


                    <p class="fs-5 text-muted font-style fw-bold my-4">Project</p>


                    @if ($message = Session::get('success'))
                        <div class="mt-2 alert alert-success d-flex ">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    @if ($message = Session::get('delete'))
                        <div class="mt-2 alert alert-danger d-flex ">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    <div class=" row" >

                        <div class="col-xxl-10 col-md-12" >
                            <div class="row justify-content-end" >


                                <div class="col-xxl-5">
                                    <div class="row justify-content-end" >
                                        <div class="col-xxl-2 col-md-1 col-lg-1 text-end ml-lg-5 align-self-lg-center" >
                                            <button  class="myBtn bi icon-icon bi-grid-3x3-gap bg-white" onclick="Button(0); Grid();"  style="color: #BEBEBE; border: 1px solid #BEBEBE;padding: 2px 6px"></button>
                                        </div>
                                        <div class="col-xxl-2 col-md-1 col-lg-1 text-start ml-lg-5 align-self-lg-center" >
                                            <button class="myBtn bi icon-icon bi-card-list bg-white" onclick="Button(1);List();" style="color: #BEBEBE; border: 1px solid #BEBEBE;padding: 2px 6px" ></button>
                                        </div>
                                        <div class="col-xxl-4 col-md-3 col-lg-2 text-end " >
                                            <button type="button" class="btn bg-white btn-md border-danger " ><a href="{{route("project.create")}}" style="color: black;text-decoration: none " class="text-muted">Create Project</a></button>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-xxl-2"></div>

                    </div>

                    <div class="row my-4">

                        <div  class="col-xxl-10">
                            <div id="listing">
                                <table  class="table table-striped table-borderless table-curved">
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

                                    @foreach($projects as $project)

                                        <tr>
                                            <td scope="row">{{$project->id}}</td>
                                            <td>{{$project->title}}</td>

                                            <td>
                                                @foreach($project->teams as $team)
                                                    <img src="https://eu.ui-avatars.com/api/?name={{ $team->name }}&background=random" class="rounded-circle" style="height: 35px; width: 35px;">
                                                @endforeach


                                            </td>
                                            <td>{{$project->due_date}}</td>
                                            <td>{{$project->start_date}}</td>
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

                                                <form action="{{route('project.destroy',$project->id)}}" method="POST">

                                                    <div class="row justify-content-evenly ">
                                                        <div class="col-xxl-2 btn btn-info text-center   text-end col-md-5"><a href="{{ route("project.overview.edit", ['project' => $project]) }}" style="color: white; text-decoration: none">Edit</a></div>
                                                        <div class="col-xxl-3 btn btn-success text-center mx-1  col-md-5"><a href="{{ route("project.overview.show", ['project' => $project]) }}" style="color: white; text-decoration: none">View</a></div>

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="col-xxl-3 btn btn-danger text-center  col-md-5">Delete</button>
                                                    </div>

                                                </form>
                                            </td>
                                        </tr>

                                    @endforeach







                                    </tbody>
                                </table>
                            </div>
                            <div id="griding" class="row g-2" style="display: none">

                                @foreach($projects as $project)

                                    <div class="col-xxl-3 col-md-6">
                                        <div class="p-3 border bg-white">

                                            <div class="row">
                                                <div class="col-10">
                                                    <span class="text-muted"><a href="#" class="text-black text-muted " style="text-decoration: none">{{$project->start_date}}</a></span>
                                                </div>
                                                <div class="col-2">
                                                    <a href="#" class="bi bi-three-dots text-black text-muted" style="text-decoration: none;font-size: 25px" ></a>
                                                </div>


                                                <div class="row mt-2 text-center">
                                                    <div class="col-12  rounded">
                                                        <span class="text-muted">Project Name</span>
                                                        <h5 class="text-center text-muted " style="letter-spacing: 1px">{{$project->project_name}}</h5>
                                                    </div>
                                                    <div class="col-12  mt-3">
                                                        @for($i=0;$i<3;$i++)
                                                            <img src="https://editorial01.shutterstock.com/preview-440/9940128c/904cb5f9/Shutterstock_9940128c.jpg" class="rounded-circle" style="height: 35px; width: 35px;">
                                                        @endfor
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
                                @endforeach


                            </div>
                        </div>



                        <div class="col-xxl-2">
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
