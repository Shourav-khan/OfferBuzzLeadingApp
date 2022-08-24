
@extends('welcome')
@section('content')

    <div class="container-fluid">




        <div class="row" style="background: #F5F5F5">

            {{--        menuBar--}}
            @include('menuBar')

            {{--        form--}}
            <div class="col-xxl-10 col-xl-9">


                {{-- Arrow 2nd--}}
                <div class="row justify-content-start pe-xxl-4 pe-xl-4">

                    <div class=" mt-3" style="font-size: 25px">
                        <a href="{{route('companies.index')}}" class=" bi bi-arrow-left text-black "></a>
                    </div>




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








                    <div class="col-xxl-12 text-center font-style rounded-1" style="background: #F6B301;color: white; letter-spacing: 1px; font-size: 22px; height: 50px">
                        <div class="my-2">Create Company</div>
                    </div>
                    <div class="col-xxl-12 my-1 rounded-1" style="background: #FFFFFF">
                        <div class=" mx-2 my-3" >


                            <form class="row g-3 p-2" action="{{route('companies.update',$company->id)}}" method="POST">

                                @csrf
                                @method('PUT')

                                <div class="col-xxl-12 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Owner Name</label>
                                    <input type="text" class="form-control" value="{{$company->owner_name}}" name="owner_name" id="inputEmail4" placeholder="Write the project title">
                                </div>

                                <div class="col-xxl-6 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Owner Designation</label>
                                    <input type="text" class="form-control" value="{{$company->owner_designation}}" name="owner_designation" id="inputEmail4" placeholder="Write the project title">
                                </div>

                                <div class="col-xxl-6 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" value="{{$company->company_name}}" id="inputEmail4" placeholder="Write the Location">
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Phone</label>
                                    <input type="text" class="form-control" value="{{$company->phone}}"  name="phone" id="inputEmail4" placeholder="Write the target">
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Email</label>
                                    <input type="text" class="form-control" value="{{$company->email}}"  name="email" id="inputEmail4" placeholder="">
                                </div>

                                <div class="col-xxl-6 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">GSTIN</label>
                                    <input type="text" class="form-control" value="{{$company->GSTIN}}"  name="GSTIN" id="inputEmail4" placeholder="">
                                </div>

                                <div class="col-xxl-6 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Location</label>
                                    <input type="text" class="form-control" value="{{$company->address}}"  name="address" id="inputEmail4">
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Business</label>
                                    <input type="text" class="form-control" value="{{$company->business_id}}"  name="business_id" id="inputEmail4">
                                </div>
                                <div class="col-xxl-6 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Status Id</label>
                                    <input type="text" class="form-control" value="{{$company->company_status_id}}"  name="company_status_id" id="inputEmail4">
                                </div>

                                <div class="col-xxl-6 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Status</label>
                                    <input type="text" class="form-control" value="{{$company->title}}"  name="title" id="inputEmail4">
                                </div>

                                <div class="col-xxl-6 col-xl-6">
                                    <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Member Since</label>
                                    <input type="text" class="form-control" value="{{$company->member_since}}"  name="member_since" id="inputEmail4">
                                </div>

                                <div class="col-12 col-xl-12 text-center">
                                    <button type="submit" class="btn btn-danger" style="width: 100px">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
