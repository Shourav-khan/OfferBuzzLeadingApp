@extends('welcome')
@section('content')

    <div class="container-fluid">



        <div class="row" style="background: #F5F5F5; font-family: 'Montserrat', sans-serif">

            @include('menuBar')

            <div class="col-md-12 col-xl-9 col-xxl-10 col-lg-12 pe-xxl-4" >

                <div class="container-fluid bg-white"  >
                    <a href="/projects" class="bi bi-arrow-left fs-2 text-black d-md-none d-lg-none d-xl-block"></a>

                    <div class="row fs-6 " style="font-family: 'Montserrat', sans-serif">
                        <div class=" fs-5 my-2">{{$project->title}}</div>

                        <div class="row  mt-4 justify-content-between mt-5" >
                            <div class="col-xxl-6 col-md-12">
                                <div class="container mx-4">
                                    <div class="my-1"> Location:
                                        @foreach($project->territories as $territory)
                                            {{$territory->title}}
                                        @endforeach
                                    </div>
                                    <div class="my-1">Team Target:
                                        @foreach($project->projectTargets as $target)
                                            {{$target->title}}
                                        @endforeach
                                    </div>
                                    <div class="row row-cols-2">
                                        <div class="col-2 text-muted text-start">Progress: </div>
                                        <div class="col-3">
                                            <div class="progress text-center mt-2 rounded-0" style="height: 5px">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                     style="width: 50%" aria-valuenow="15" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-2">
                                        <div class="col-2 my-1">Status: </div>
                                        <div class="col-10 text-muted fs-6 my-1">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1">To Do</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Pending</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                <label class="form-check-label" for="inlineCheckbox3">Progress</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                <label class="form-check-label" for="inlineCheckbox3">Complete</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-5 col-md-12 mt-4 mx-xl-5">

                                <div class="text-muted ">Start Date: 25/04/2</div>
                                <div class="text-muted my-2">Due Date: 25/04/22</div>
                                <div class="row justify-content-start">
                                    <div class="col-2 my-1">Assigned: </div>
                                    <div class="col-3 align-self-center" >
                                        @foreach($project->teams as $team)
                                            <img src="https://eu.ui-avatars.com/api/?name={{ $team->name }}&background=random" class="rounded-circle" style="height: 35px; width: 35px;">
                                        @endforeach
                                    </div>
                                    <div class="col-3 " >
                                        <button type="button" class="btn btn-danger bg-white " style="color: red;font-size: 12px">Add Team</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="container-fluid mt-5">
                            @include('overviewLeadTeamMstr')
                        </div>




                        <div class="row">
                            <div class="col-xxl-12 col-md-12">
                                <div class="row mt-3" >
                                    <div class="col-12">
                                        <table class="table table-striped table-borderless table-curved border">
                                            <thead class="thead">
                                            <tr class="text-center">
                                                <th scope="col">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                               id="customCheck1" checked>

                                                    </div>
                                                </th>
                                                <th scope="col">Id</th>

                                                <th scope="col">Team</th>

                                                <th scope="col">Target</th>
                                                <th scope="col">Achieved</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                            </thead>


                                            <tbody class="tbody text-center">



                                            @foreach($project->teams as $team)


                                                <tr>
                                                    <td>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="customCheck1" checked>
                                                        </div>
                                                    </td>
                                                    <td scope="row">{{ $loop->iteration }}</td>

                                                    <td>

                                                        {{$team->name}}
                                                    </td>

                                                    <td>
                                                        @foreach($project->projectTargets as $target)
                                                            {{$target->title}}
                                                        @endforeach



                                                    </td>
                                                    <td>
                                                        30
                                                    </td>
                                                    <td>
                                                        <a href="{{route('view.team',['team'=>$team])}}" class="text-black text-decoration-none">view</a>
                                                    </td>
                                                </tr>

                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>




                                </div>
                            </div>
                        </div>

                        <div class="row px-4">
                            <div class="col-xxl-12 col-md-12 border">

                                <div class="row">
                                    <div class="col-9 my-2">Comments</div>
                                    <div class="col-3 text-end fs-6 mt-2"><a href="" class="text-black text-decoration-none">View More</a></div>
                                </div>


                                <div class="row">

                                    <section >
                                        <div class="container my-5 py-5">
                                            <div class="row">
                                                <div class="col-xxl-12">

                                                    <div class="card-body p-4">
                                                        <div class="d-flex flex-start">
                                                            <img class="rounded-circle  me-3"
                                                                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                                                                 height="60" />
                                                            <div class="p-3 rounded-2" style="background: #F2F2F2">
                                                                <h6 class="fw-bold mb-1 ">Team Comments</h6>
                                                                <p class="mb-0 ">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                                    since the 1500s, when an unknown printer took a galley of type and
                                                                    scrambled it.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{--<hr class="my-0" />--}}
                                                    <div class="card-body p-4">
                                                        <div class="d-flex flex-start">
                                                            <img class="rounded-circle  me-3"
                                                                 src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                                                                 height="60" />
                                                            <div class="p-3 rounded-2" style="background: #F2F2F2">
                                                                <h6 class="fw-bold mb-1 ">Team Comments</h6>
                                                                <p class="mb-0 ">
                                                                    Lorem Ipsum is simply dummy text of the printing and typesetting
                                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                                    since the 1500s, when an unknown printer took a galley of type and
                                                                    scrambled it.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <section>
                                                        <div class="container my-2 py-5 text-dark">
                                                            <div class="row d-flex justify-content-center">
                                                                <div class="col-xxl-12">
                                                                    <div class="card">
                                                                        <div class="card-body p-4">
                                                                            <div class=" flex-start w-100">
                                                                                <img class="rounded-circle shadow-1-strong me-3"
                                                                                     src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(21).webp" alt="avatar" width="65"
                                                                                     height="65" />
                                                                                <div class="w-100">
                                                                                    <h5>Add a comment</h5>

                                                                                    <div class="form-outline">
                                                                                        <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                                                                                        <label class="form-label" for="textAreaExample">Write a comment to reply....</label>
                                                                                    </div>
                                                                                    <div class="d-flex justify-content-between mt-3">

                                                                                        <button type="button" class="btn btn-danger">
                                                                                            Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>

                                                </div>
                                            </div>
                                        </div>
                                    </section>




                                    <div class="col-2 text-end fs-5"></div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
