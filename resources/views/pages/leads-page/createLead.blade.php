@extends('welcome')
@section('content')

    <div class="container-fluid">




        <div class="row" style="background: #F5F5F5; font-family: 'Montserrat', sans-serif">

           @include('menuBar')


            <div class="col-xxl-10 col-xl-9">
                <a href="/project/lead/details" class="bi bi-arrow-left fs-2 text-black d-md-none d-lg-none d-xl-block"></a>

                @if($errors->any())

                    <div class="alert alert-danger">

                        <ul>
                           @foreach($errors->all() as $error)
                               <li>{{$error}}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif

                <div class="row">
                    <div class="col-xxl-12 col-md-12 col-xl-12">
                        <div class="d-flex justify-content-center border text-white fs-3 p-2  " style="background: #F6B301; margin-right: 25% ;margin-left: 25%  ">Create Lead</div>


                    <div class="col-xxl-12 col-md-12 col-xl-12">
                        <div class="container-fluid bg-white w-50">
                            <div class="col-xxl-12 ">

                                <form action="#" method="POST"  class="row g-3 container-fluid" >
                                    @csrf

                                    @if($leadInfo)

                                    <div class="p-3 fs-5" style="font-weight: 600">Lead Information</div>
                                    <div class="col-xxl-6 col-md-12 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Company Name</label>
                                        <input type="text" name="company_name" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Name">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Owner Name</label>
                                        <input type="text" name="owner_name" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Name">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Contact Person</label>
                                        <input type="text" name="contact_person" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Name">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputState" class="form-label fs-6 text-muted" style="letter-spacing: -1px;font-weight: 500">State</label>
                                        <input type="text" name="state" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Name">

                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Email</label>
                                        <input type="email" name="email1" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Email Address">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Phone Number</label>
                                        <input type="text" name="phone1" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Phone Number">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Address</label>
                                        <input type="text" name="address1" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Address">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputState" class="form-label fs-6 text-muted" style="letter-spacing: -1px;font-weight: 500">Source By</label>
                                        <input type="text" name="source_by" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Address">

                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputState" class="form-label fs-6 text-muted" style="letter-spacing: -1px;font-weight: 500">Lead By</label>
                                        <select class="form-select " multiple="multiple" name="lead_id[]" aria-label="Default select example">

                                            @foreach($users as $people)
                                                <option  value="{{ $people->id }}">{{ $people->name }}</option>
                                            @endforeach




                                        </select>
                                    </div>
{{--                                    <div class="col-xxl-6 col-xl-6">--}}
{{--                                        <label for="inputState" class="form-label fs-6 text-muted" style="letter-spacing: -1px;font-weight: 500">Lead Status</label>--}}
{{--                                        <input type="text" name="source_by" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Address">--}}

{{--                                    </div>--}}
                                    @endif



                                    @if($leadAdditionalInfo)



                                <div class="p-3 fs-5" style="font-weight: 600">Additional Information</div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Email</label>
                                        <input type="email" name="email2" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Email Address">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Phone Number</label>
                                        <input type="text" name="phone2" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Phone Number">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Business</label>
                                        <input type="text" name="business" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write Business Name">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Branch</label>
                                        <input type="text" name="branch" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write branch name">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Description</label>
                                        <input type="text" name="description" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Description">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Address</label>
                                        <input type="email" name="address2" class="form-control border rounded-0 p-3" id="inputEmail4" placeholder="Write the Address">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Logo</label>
                                        <input type="email" name="logo" class="form-control border rounded-0 p-5" id="inputEmail4">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label text-muted fs-6 " style="letter-spacing: -1px;font-weight: 500">Owner Photo</label>
                                        <input type="email" name="photo" class="form-control border rounded-0 p-5" id="inputEmail4">
                                    </div>
                                    @endif

                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn text-white border rounded-0" style="width: 10rem;background-color: #CB0E00">Save</button>
                                    </div>

                                </form>



                            </div>
                        </div>
                    </div>



                </div>
            </div>





        </div>
    </div>

@endsection
