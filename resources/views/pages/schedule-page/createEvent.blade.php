@extends('welcome')
@section('content')

    <div class="container-fluid">



        <div class="row" style="background: #F5F5F5">

            {{--        menuBar--}}

            @include('menuBar')

            {{--        form--}}
            <div class="col-xxl-10 col-xl-9">


                    {{-- Arrow 2nd--}}
                    <div class="row">
                        <div class=" col-12 d-lg-block d-md-block  d-xl-block d-none mx-3">
                            <div class=" mt-3 " style="font-size: 25px">
                                <a href="{{route('schedule')}}" class=" bi bi-arrow-left text-black"></a>
                            </div>
                        </div>
                    </div>

                    <div class="row container-fluid my-3">
                        <div class="col-xxl-12 text-center font-style rounded-1" style="background: #F6B301;color: white; letter-spacing: 1px; font-size: 22px; height: 50px">
                            <div class="my-2 text-black">Create Event</div>
                        </div>
                        <div class="col-xxl-12 my-1 rounded-1" style="background: #FFFFFF">
                            <div class="container-fluid mx-2 my-3">
                                <form class="row g-3">
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Title</label>
                                        <input type="text" class="form-control p-3" id="inputEmail4" placeholder="Write the project title">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Date</label>
                                        <select id="inputState" class="form-select text-muted p-3">
                                            <option selected>From</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Choose Room</label>
                                        <select id="inputState" class="form-select text-muted p-3">
                                            <option selected>Create Event</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Time</label>
                                        <select id="inputState" class="form-select text-muted p-3">
                                            <option selected>From</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Description</label>
                                        <input type="text" class="form-control p-5" id="inputEmail4" placeholder="Write the project title">
                                    </div>
                                    <div class="col-xxl-6 col-xl-6">
                                        <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Invite People</label>
                                        <select id="inputState" class="form-select text-muted p-5">
                                            <option selected>From</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-xl-12 text-center">
                                        <button type="submit" class="btn text-white rounded-0" style="width: 100px;background: #CB0E00;letter-spacing: 1px">Save</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>

@endsection
