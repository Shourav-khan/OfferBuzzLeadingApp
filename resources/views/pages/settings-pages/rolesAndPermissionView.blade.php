@extends('welcome')
@section('content')

    <div class="container-fluid">




        <div class="row" style="background: #F5F5F5;font-family: 'Montserrat', sans-serif">

            {{--        menuBar--}}
            @include('menuBar')


            <div class="col-xxl-10 col-xl-9">

                    <div class="row w-100" >
                        <div class="col-xxl-9 col-xl-9">

                            @include('rolesAndPermissionMaster')


                            <div class="col-12 bg-white rounded-2">

                                <div class="container-fluid p-4">

                                    <nav class="navbar navbar-expand-lg navbar-light rounded-2" style="background: #D9D9D9">
                                        <div class="container-fluid p-2" >

                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                    <li class="nav-item">
                                                        <a class="nav-link active mx-3" aria-current="page" href="#" style="font-weight: 500">Lead</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mx-5" aria-current="page" href="#" style="font-weight: 600">Company</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mx-5" aria-current="page" href="#" style="font-weight: 600">Project</a>
                                                    </li>

                                                </ul>
                                                <form class="d-flex">

                                                    <input class="form-control me-2" type="search" placeholder="Add New Status" aria-label="Search">
                                                    <button class="btn  bg-white" type="submit" style="border-radius: 100px">Save</button>
                                                </form>
                                            </div>
                                        </div>
                                    </nav>

                                    <div class="row my-2">
                                        <div class="col-12 px-4">
                                            <div class="row border rounded-2 p-3" style="font-weight: 500">
                                                <div class="col-6 text-start">Lead In</div>
                                                <div class="col-6 text-end">Delete</div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row my-2">
                                        <div class="col-12 px-4">
                                            <div class="row border rounded-2 p-3" style="font-weight: 500">
                                                <div class="col-6 text-start">Approved</div>
                                                <div class="col-6 text-end">Delete</div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-12 col-xl-12 text-center my-5">
                                <button type="submit" class="btn text-white rounded-2 w-20 my-2" style="background: #CB0E00;width: 200px; font-weight: 600">Save Change</button>
                            </div>

                        </div>


                        <div class="col-xxl--3 col-xl-3 my-3">
                            <div class="row g-1">
                                <div class="col-12">
                                    <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                        <div class="mx-4">Lead Status</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                        <div class="mx-4">Potential</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                        <div class="mx-4">Qualified</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                        <div class="mx-4">Review</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                        <div class="mx-4">Negotiations</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                        <div class="mx-4">Proposal Sent</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                        <div class="mx-4">Approved</div>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>






        </div>
    </div>

@endsection
