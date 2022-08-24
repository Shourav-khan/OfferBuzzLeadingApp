@extends('welcome')
@section('content')

    <div class="container-fluid">


        <div class="row" style="background: #F5F5F5;font-family: 'Montserrat', sans-serif">


            @include('menuBar')

            <div class="col-md-12 col-xl-9 col-xxl-10 col-lg-12" >

                <div class="container-fluid row bg-white">
                    <a href="/projects" class="bi bi-arrow-left fs-2 text-black d-md-none d-lg-none d-xl-block"></a>

                    <div class="row">
                        <div class=" fs-5 my-2">{{$project->title}}</div>

                        <div class="row  mt-4 justify-content-between mt-5" >
                            <div class="col-xxl-6 col-md-12">
                                <div class="container mx-4">
                                    <div class="my-1">Location:

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
                            <div class="col-xxl-5 col-md-12 mt-4">

                                <div class="text-muted ">Start Date: {{$project->start_date}}</div>
                                <div class="text-muted my-2">Due Date: {{$project->due_date}}</div>
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
                    </div>



                    <div class="col-xxl-8 col-md-12 col-xl-12" >
                        <div class="row my-4" >
                            <div class="col-xxl-12 ">
                                <table class="table table-striped table-borderless table-curved border">
                                    <thead class="thead">
                                    <tr class="text-center">
                                        <th scope="col">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                       id="customCheck1" checked>

                                            </div>
                                        </th>
                                        <th>Lead Id</th>
                                        <th>Company Name</th>
                                        <th >Contact Person</th>
                                        <th >Agreement</th>
                                        <th >Lead By</th>
                                        <th >Action</th>

                                    </tr>
                                    </thead>


                                    <tbody class="tbody text-center">


                                    @foreach($project->leads as $lead)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           id="customCheck1" checked>
                                                </div>
                                            </td>
                                            <td scope="row">{{$lead->id}}</td>
                                            <td>{{$lead->company_name}}</td>
                                            <td> {{$lead->contact_person}}</td>
                                            <td>
                                                <button type="button"
                                                        class="btn btn-outline-danger btn-sm px-4 bg-white">In
                                                    Progress
                                                </button>
                                            </td>
                                            <td>

                                                <img src="https://scontent.fdac145-1.fna.fbcdn.net/v/t39.30808-6/276319212_1958384817691635_1200636644143404603_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=174925&_nc_eui2=AeF5G_apG_DiVH0IFIHp2dAy6KDDqT7lVGzooMOpPuVUbESyU1XhNeO0-U08u6fKq-PaG_NiE1c-5PgV44KA4QXu&_nc_ohc=drVdqRZZoRUAX8d6tcD&_nc_ht=scontent.fdac145-1.fna&oh=00_AT9oE3HTh5rXHM4AIiiunZi7MUg9c1zk25yGAPdYMIiujA&oe=62AB2874" class="img-thumbnail rounded-circle" alt="..."
                                                     style="height: 45px; width:50px;">
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-6 text-end">
                                                        <a href="{{route('view.lead',['lead' => $lead])}}" class="fas fa-eye text-black"></a>
                                                    </div>
                                                    <div class="col-6 text-start">
                                                        <a href="" class="fas fa-pencil-alt text-black"></a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>


                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link text-black" href="#">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link text-black" href="#">1</a>
                                    </li>
                                    <li class="page-item"><a class="page-link text-black" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link text-black" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link text-black" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>



                            <div class="row mx-1">
                                <div class="col-xxl-12 border ">

                                    <div class="row justify-content-between my-1">
                                        <div class="col-6 ">Comments</div>
                                        <div class="col-3 text-end fs-6">View More</div>
                                    </div>




                                    <section>
                                        <div class="container-fluid">

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

                                    </section>




                                    <div class="col-2 text-end fs-5"></div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xxl-4">




                        <div class="row g-4 my-1">
                            <div class="col-xxl-12 col-md-12">
                                <div class=" border bg-white">
                                    <div class="row justify-content-between px-1">
                                        <div class="col-xxl-4 col-md-4 my-1">Team Progress</div>
                                        <div class="col-xxl-6 col-md-6 text-end">
                                            <button type="button"
                                                    class="btn btn-danger border my-1 bg-white btn-sm  mb-2 "
                                                    style="color: red">
                                                Add Task
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-borderless ">
                                                <thead>
                                                <tr style="background: #D9D9D9">

                                                    <th class="">Assign</th>
                                                    <th class=" text-center">Progress</th>
                                                    <th class=" text-center">Target</th>
                                                </tr>
                                                </thead>
                                                <tbody>


                                                <tr>
                                                    <td>
                                                        <img src="https://images.squarespace-cdn.com/content/v1/56b75f108a65e2ee4f2f2bde/1455557293033-S86RZZK28KMB9LN01U0I/image-asset.jpeg?format=1000w" class="img-thumbnail rounded-circle"
                                                             alt="..."
                                                             style="height: 40px; width: 40px;">
                                                    </td>
                                                    <td>
                                                        <div class="progress  rounded-1 my-2 ">
                                                            <div class=" progress-bar bg-danger"
                                                                 role="progressbar"
                                                                 style="width: 50%" aria-valuenow="15"
                                                                 aria-valuemin="0"
                                                                 aria-valuemax="100">

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">50</td>
                                                </tr>



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xxl-12">
                                <div class=" border bg-white">

                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-borderless ">
                                                <thead>
                                                <tr style="background: #D9D9D9">

                                                    <th class="col-12">Messages</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>

                                                    <td>


                                                        <div class="row">
                                                            <div class="col-12">
                                                                <section>

                                                                    <div class="row">
                                                                        <div class="col-xxl-12">

                                                                            <div class="card-body">

                                                                                <div class="row">
                                                                                    <div class="col-2">
                                                                                        <img
                                                                                            class="rounded-circle  me-3"
                                                                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp"
                                                                                            alt="avatar"
                                                                                            width="60"
                                                                                            height="60"/>
                                                                                    </div>
                                                                                    <div class="col-10">
                                                                                        <div class=""
                                                                                             style="background: #F2F2F2">
                                                                                            <h6 class="fw-bold mb-1 ">
                                                                                                Team
                                                                                                Comments</h6>
                                                                                            <p class=" ">
                                                                                                Lorem
                                                                                                Ipsum is
                                                                                                simply
                                                                                                dummy
                                                                                                text of
                                                                                                the
                                                                                                printing
                                                                                                and
                                                                                                typesetting
                                                                                                industry.
                                                                                                Lorem
                                                                                                Ipsum
                                                                                                has been
                                                                                                the
                                                                                                industry's
                                                                                                standard
                                                                                                dummy
                                                                                                text
                                                                                                ever
                                                                                                since
                                                                                                the
                                                                                                1500s,
                                                                                                when an
                                                                                                unknown
                                                                                                printer
                                                                                                took a
                                                                                                galley
                                                                                                of type
                                                                                                and
                                                                                                scrambled
                                                                                                it.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="row">
                                                                                    <div class="col-2">
                                                                                        <img
                                                                                            class="rounded-circle  me-3"
                                                                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp"
                                                                                            alt="avatar"
                                                                                            width="60"
                                                                                            height="60"/>
                                                                                    </div>
                                                                                    <div class="col-10">
                                                                                        <div class=""
                                                                                             style="background: #F2F2F2">
                                                                                            <h6 class="fw-bold mb-1 ">
                                                                                                Team
                                                                                                Comments</h6>
                                                                                            <p class=" ">
                                                                                                Lorem
                                                                                                Ipsum is
                                                                                                simply
                                                                                                dummy
                                                                                                text of
                                                                                                the
                                                                                                printing
                                                                                                and
                                                                                                typesetting
                                                                                                industry.
                                                                                                Lorem
                                                                                                Ipsum
                                                                                                has been
                                                                                                the
                                                                                                industry's
                                                                                                standard
                                                                                                dummy
                                                                                                text
                                                                                                ever
                                                                                                since
                                                                                                the
                                                                                                1500s,
                                                                                                when an
                                                                                                unknown
                                                                                                printer
                                                                                                took a
                                                                                                galley
                                                                                                of type
                                                                                                and
                                                                                                scrambled
                                                                                                it.
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                            {{--<hr class="my-0" />--}}


                                                                            <section>
                                                                                <div
                                                                                    class="container  text-dark">

                                                                                    <div class="row">
                                                                                        <div
                                                                                            class="col-xxl-8">

                                                                                            <div
                                                                                                class="card-body ">
                                                                                                <div
                                                                                                    class=" flex-start w-100">


                                                                                                    <div
                                                                                                        class="w-100 ">
                                                                                                        <div
                                                                                                            class="form-outline">
                                                                                                                            <textarea
                                                                                                                                class="form-control"
                                                                                                                                id="textAreaExample"
                                                                                                                                rows="4"
                                                                                                                                placeholder="Type a message"></textarea>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>

                                                                                        <div
                                                                                            class="col-xxl-4 align-self-center">
                                                                                            <button
                                                                                                type="button"
                                                                                                class="btn btn-warning">
                                                                                                Send <i
                                                                                                    class="fas  ms-1"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>

                                                                        </div>
                                                                    </div>


                                                                </section>


                                                            </div>
                                                            <div class="col-2 text-end fs-5"></div>
                                                        </div>


                                                    </td>

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


        </div>


    </div>


    </div>
    </div>

@endsection
