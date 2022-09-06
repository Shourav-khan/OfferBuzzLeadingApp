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

                                @livewire('lead-multi-form')





                            </div>
                        </div>
                    </div>



                </div>
            </div>





        </div>
    </div>

@endsection
