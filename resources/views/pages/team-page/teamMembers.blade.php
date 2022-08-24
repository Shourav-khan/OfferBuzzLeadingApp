@extends('welcome')
@section('content')

    <div class="container-fluid">


        <div class="row" style="background: #F5F5F5; font-family: 'Montserrat', sans-serif">


            @include('menuBar')


            <div class="col-xxl-10 col-xl-9">

                <p class="fs-5 text-muted font-style fw-bold my-4">Team Members</p>

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


                <div class="row" >
                    <div class="col-xxl-9 col-md-12" >
                        <div class="row justify-content-end" >


                            <div class="col-xxl-4 col-md-6 col-lg-5">
                                <div class="row justify-content-end" >
                                    <div class="col-xxl-1 col-md-1 col-lg-1 mx-4" >
                                        <button  class="myBtn bi icon-icon bi-grid-3x3-gap bg-white" onclick="Button(0); Grid();"  style="color: #BEBEBE; border: 1px solid #BEBEBE;padding: 2px 6px"></button>
                                    </div>
                                    <div class="col-xxl-2 col-md-2 col-lg-2" >
                                        <button class="myBtn bi icon-icon bi-card-list bg-white" onclick="Button(1);List();" style="color: #BEBEBE; border: 1px solid #BEBEBE;padding: 2px 6px" ></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3"></div>
                </div>












                <div class="row my-2">
                    <div class="col-xxl-9 col-md-12 col-lg-12 col-xl-12"  style="padding-right: 24px; padding-left: 24px" >
                        <div class="row justify-content-between bg-white">
                            <div class="col-xxl-6 col-md-6 col-xl-6 col-lg-5" >
                                <div class="row my-3">
                                    <div class="fs-6 text-muted font-style fw-bold">Team Members</div>
                                </div>
                            </div>


                            <div class="col-xxl-5 col-md-5 col-xl-5 col-lg-5">
                                <div class="row my-1 justify-content-end">

                                    <div class="col-xxl-7 col-md-8">

                                    </div>




                                    <div class="col-xxl-4 col-md-4 text-end">

                                        <a href="#" style="text-decoration: none; color: black">
                                            <button type="button" class="btn btn-white border bg-white w-100 fw-bold my-2" style="font-size: 12px">Add Task</button>
                                        </a>


                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                    <div class="col-xxl-3"></div>
                </div>





















                <div class="row">
                    <div class="col-xxl-9">


                        <div id="listing">
                        <table class="table table-striped table-borderless table-curved border fs-6" >
                            <thead class="thead">
                            <tr class="text-center">
                                <th scope="col">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customCheck1" checked>

                                    </div>
                                </th>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Location</th>
                                <th scope="col">Created at</th>
                                <th scope="col">Target</th>
                                <th scope="col">Achieved</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>


                            <tbody class="tbody text-center">

                            @foreach($teams as $team)

                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customCheck1" checked>
                                    </div>
                                </td>
                                <td scope="row">{{$team ->id}}</td>
                                <td>{{$team->name}}</td>


                                <td>
                                 {{$team->territory->title}}
                                </td>

                                <td>
                                    {{$team->created_at}}
                                </td>
                                <td>
                                    100
                                </td>

                                <td>
                                    30
                                </td>
                                <td>




                                    <form action="{{route('team.destroy.all',$team->id)}}" method="POST">

                                        <a href="{{route('team.detail')}}" class="text-black text-decoration-none btn btn-success">view</a>

                                        <a class="btn btn-primary" href="{{route('team.edit',$team)}}">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>

                                </td>
                            </tr>

                           @endforeach






                            </tbody>
                        </table>
                        <div class="border bg-white" style="font-size: 12px">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-end my-2">
                                    <li class="page-item ">
                                        <a class="page-link text-black" href="#">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link text-black" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link text-black" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link text-black" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link text-black" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link text-black" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link text-black" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        </div>

                        <div id="griding" class="row  g-2" style="display: none">

                            @foreach($teams as $team)

                            <div class="col-xxl-3 col-md-6 col-xl-6">
                                <div class="p-1 bg-white rounded-2">
                                    <div class="row" style="font-size: 12px">
                                        <div class="col-12">
                                            <a href="#" class="bi bi-three-dots text-black text-muted d-flex justify-content-end" style="text-decoration: none;font-size: 25px" ></a>
                                        </div>
                                        <img src="https://media.istockphoto.com/photos/business-team-leader-picture-id1268719270?b=1&k=20&m=1268719270&s=170667a&w=0&h=Tz0HWkFwaPW6gM1Mw7azDOggB_BuFyG1PqEdCsUeF8g=" class="card-img-100 mx-auto d-block rounded-circle " alt="..." style="width: 9rem; height: 7rem">
                                        <div class="row mt-2">
                                            <div class="col-12 text-center rounded p-2 mx-2">
                                                <div class="text-muted fs-6">Team Members</div>
                                                <div class="text-center text-muted " style="letter-spacing: 1px">{{$team->name}}</div>
                                                <div class="text-center text-muted " style="letter-spacing: 1px">{{$team->location}}</div>

                                                <div class="row p-2 ">
                                                    <div class="col-xxl-6 col-md-6 text-start">

                                                        <div class="fs-4 text-muted mx-2" >20</div>
                                                        <span>Target</span>

                                                    </div>
                                                    <div class="col-xxl-6 col-md-6 text-end">
                                                        <div class="fs-4 text-muted mx-2" >03</div>
                                                        <span>Leads</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>

                         @endforeach

                        </div>


                    </div>



                    <div class="col-xxl-3">

                        <div class="container-fluid mt-md-4 mt-xxl-0">
                            <div class="row  justify-content-evenly">
                                <div class="col-xxl-12 col-xl-5 col-md-5">

                                    <div class="row bg-white rounded-2 p-2">
                                        <h6 class="text-muted my-1"  style="font-size: 15px"> Create Team</h6>

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif


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


                                        <form action="{{route('team.store.all')}}" method="POST" class="my-2" >

                                            @csrf
                                            <div class="mb-3" style="font-size: 12px">

                                                <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp" placeholder="Team Name"  style="font-size: 12px">
                                            </div>

                                            <div class="mb-3">

                                                <input type="text"  name="description" class="form-control" id="" placeholder="Description" style="font-size: 12px">
                                            </div>

                                            <div class="mb-3">


                                                <label for="inputEmail4"  class="form-label font-style  text-muted " style="font-size: 12px">Location </label>

                                                <select class="form-select"   name="territory_id" aria-label="Default select example">



                                                    @foreach($territories as $territory)
                                                        <option value="{{ $territory->id }}">{{ $territory->title }}</option>
                                                    @endforeach





                                                </select>

                                            </div>


                                            <button type="submit" class="btn btn-secondary w-100">Save</button>
                                        </form>

                                    </div>

                                </div>


                                <div class="col-xxl-12 mt-xxl-4 col-xl-5 col-md-5">
                                    <div class="row bg-white rounded-2 p-2">
                                        <h6 class="text-muted my-1" style="font-size: 15px"> Create Terget</h6>

                                        <div class="container-fluid">
                                            <form class="my-2">
                                                <div class="mb-3">

                                                    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Team Name" style="font-size: 12px">

                                                </div>
                                                <div class="mb-3">

                                                    <input type="text" class="form-control" id="" placeholder="Target" style="font-size: 12px">

                                                </div>


                                                <button type="submit" class="btn btn-secondary w-100">Send</button>
                                            </form>
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
