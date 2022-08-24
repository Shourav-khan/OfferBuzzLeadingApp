@extends('welcome')
@section('content')

    <div class="container-fluid">


        <div class="row" style="background: #F5F5F5">

            {{--        menuBar--}}
           @include('menuBar')

            {{--        form--}}
            <div class="col-xxl-10 col-xl-9">
                <div class=" my-4">

                    {{-- Arrow 2nd--}}
{{--                    <div class="row">--}}
{{--                        <div class=" col-12 d-md-none d-lg-none d-xl-block">--}}
{{--                            <div class=" mt-3 " style="font-size: 25px">--}}
{{--                                <a href="#" class=" bi bi-arrow-left text-black"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row  justify-content-end">
                        <div class="col-xxl-2 col-md-3 col-lg-2 text-end pe-xxl-4">
                           <a href="{{route('companies.create')}}" style="color: black;text-decoration: none " class="text-muted"> <button type="button" class="btn bg-white btn-md border-danger " >Create Company</button></a>
                        </div>
                    </div>



                    @if ($message = Session::get('success'))
                        <div class="mt-2 alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    @if ($message = Session::get('delete'))
                        <div class="mt-2 alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif


                    <div class=" row my-2" >
                        <div class="col-xxl-12 col-md-12 col-lg-12 pe-xxl-4">

                            <table class="table table-striped table-borderless table-curved border" >
                                <thead class="thead">
                                <tr class="text-center">
                                    <th scope="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="customCheck1" checked>

                                        </div>
                                    </th>
                                    <th scope="col">Id Name</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">GSTIN</th>
                                    <th scope="col">Member Since</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Business</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>

                                </tr>
                                </thead>


                                <tbody class="tbody text-center">

                                @foreach($companies as $company)

                                <tr>
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="customCheck1" checked>
                                        </div>
                                    </td>
                                    <td scope="row">{{$company->id}}</td>
                                    <td>
                                        <div>{{$company->owner_name}}</div>
                                        <div style="font-size: 10px">Director</div>
                                    </td>
                                    <td> {{$company->company_name}}</td>

                                    <td>
                                        {{$company->phone}}
                                    </td>
                                    <td>
                                        {{$company->email}}
                                    </td>

                                    <td>{{$company->GSTIN}}</td>

                                    <td>{{$company->member_since}}</td>

                                    <td>
                                        {{$company->address}}
                                    </td>
                                    <td>
                                        05
                                    </td>
                                    <td>
                                        {{$company->title}}
                                    </td>
                                    <td class="">




                                        <form action="{{route('companies.destroy',$company->id)}}" method="POST">


                                        <div class="row justify-content-around">
                                            <div class="col-3">
                                                <a href="{{route("companies.show",['company'=>$company])}}" class="text-black text-decoration-none">View</a>
                                            </div>



                                            <div class="col-3 ">
                                                <a href="{{route("companies.edit",['company'=>$company])}}" class="text-black text-decoration-none">Edit</a>
                                            </div>


                                            @csrf
                                            @method('DELETE')


                                            <div class="col-3">
                                                <button  type="submit" class="text-black ">Delete</button>
                                            </div>


                                        </div>

                                        </form>

                                    </td>
                                </tr>
                                @endforeach





                                </tbody>
                            </table>
                            <div class="border bg-white">
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
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
