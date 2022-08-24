@extends('welcome')
@section('content')

    <div class="container-fluid">


        <div class="row" style="background: #F5F5F5;font-family: 'Montserrat', sans-serif">

            {{--        menuBar--}}
            @include('menuBar')

            {{--        form--}}
            <div class="col-xxl-10 col-xl-9">


                    <div class="row px-3 pe-xxl-4">


                        <div class="col-12">
                            @include('rolesAndPermissionMaster')
                        </div>


                        <div class="col-12 bg-white border-0 rounded-3">
                            <div class="container-fluid">
                                <div class="row p-3">
                                    <div class="col-12 border rounded-2">
                                        <div class="row p-5 justify-content-start">
                                            <div class="col-2">
                                                <img src="https://scontent.fdac145-1.fna.fbcdn.net/v/t39.30808-6/276319212_1958384817691635_1200636644143404603_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=174925&_nc_eui2=AeF5G_apG_DiVH0IFIHp2dAy6KDDqT7lVGzooMOpPuVUbESyU1XhNeO0-U08u6fKq-PaG_NiE1c-5PgV44KA4QXu&_nc_ohc=drVdqRZZoRUAX8d6tcD&_nc_ht=scontent.fdac145-1.fna&oh=00_AT9oE3HTh5rXHM4AIiiunZi7MUg9c1zk25yGAPdYMIiujA&oe=62AB2874" class="card-img-top rounded-circle mx-auto" alt="" style="height: 5rem;width: 5rem">
                                            </div>
                                            <div class="col-5">
                                                <button type="button" class="btn border my-1" style="border-radius: 100px;font-weight: 500;width: 200px">Change Photo</button> <br>
                                                <span class="mx-1" style="font-weight: 500; font-size: 11px" >U can Upload jpg or png image files max size of 3mb</span>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12 my-4">
                                        <form class="row g-3">
                                            <div class="col-xxl-6 col-xl-6">
                                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">First Name</label>
                                                <input type="text" class="form-control p-3" id="inputEmail4" placeholder="First Name">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6">
                                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Last Name</label>
                                                <input type="text" class="form-control p-3" id="inputEmail4" placeholder="Last Name">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6">
                                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Email</label>
                                                <input type="text" class="form-control p-3" id="inputEmail4" placeholder="Email">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6">
                                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Phone</label>
                                                <input type="text" class="form-control p-3" id="inputEmail4" placeholder="Phone">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6">
                                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Password</label>
                                                <input type="text" class="form-control p-3" id="inputEmail4" placeholder="Password">
                                            </div>
                                            <div class="col-xxl-6 col-xl-6">
                                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">New Password</label>
                                                <input type="text" class="form-control p-3" id="inputEmail4" placeholder="New Password">
                                            </div>

                                            <div class="col-12 col-xl-12 text-center my-5">
                                                <button type="submit" class="btn text-white rounded-2 w-20" style="background: #CB0E00;width: 200px; font-weight: 600">Save Change</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>





            </div>
        </div>
    </div>

@endsection
