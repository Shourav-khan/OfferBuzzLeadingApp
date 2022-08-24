@extends('welcome')
@section('content')

    <div class="container-fluid">




        <div class="row" style="background: #F5F5F5">

            {{--        menuBar--}}
            @include('menuBar')

            {{--        form--}}
            <div class="col-xxl-10 col-xl-9">


                <div class=" mt-3" style="font-size: 25px">
                    <a href="#" class=" bi bi-arrow-left text-black "></a>
                </div>

                {{-- Arrow 2nd--}}
                <div class=" d-flex justify-content-center">



                    <form action="#" method="" class="my-2" >


                        <div class="mb-3" style="font-size: 12px">

                            <input type="text" name="name" class="form-control" id="" aria-describedby="emailHelp" placeholder="Team Name"  style="font-size: 12px">
                        </div>

                        <div class="mb-3">

                            <input type="text"  name="description" class="form-control" id="" placeholder="Description" style="font-size: 12px">
                        </div>

                        <div class="mb-3">


                            <label for="inputEmail4"  class="form-label font-style  text-muted " style="font-size: 12px">Location </label>

                            <select class="form-select"   name="territory_id" aria-label="Default select example">








                            </select>

                        </div>


                        <button type="submit" class="btn btn-secondary w-100">Save</button>
                    </form>





                </div>

            </div>
        </div>
    </div>

@endsection
