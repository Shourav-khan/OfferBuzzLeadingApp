@extends('welcome')
@section('content')

    <div class="container-fluid">




        <div class="row" style="background: #F5F5F5;font-family: 'Montserrat', sans-serif">

            {{--        menuBar--}}

            @include('menuBar')

            {{--        form--}}
            <div class="col-xxl-10 col-xl-9">


                    <div class="row">
                    <div class="col-3">

                        <div class="text-muted fs-5 my-4" style="font-weight: 500">My Messages</div>

                        <form>
                            <div class="row mt-5">
                                <div class="col-12">

                                    <div class="input-group">
                                        <input class="form-control border-end-0 border" type="search" value="search" id="example-search-input">
                                        <span class="input-group-append">
                                        <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border" type="button">
                                         <i class="fa fa-search"></i>
                                         </button>
                                         </span>
                                    </div>

                                </div>
                            </div>

                        </form>

                        <div class="row my-5 justify-content-xxl-start">
                            <div class="col-xxl-2 col-md-4 text-muted " style="font-weight: 500">All</div>
                            <div class="col-xxl-2 col-md-4 text-muted " style="font-weight: 500">Sales</div>
                            <div class="col-xxl-2 col-md-4 text-muted " style="font-weight: 500">Tech</div>
                        </div>


                            <div class="row g-1">
                                <div class="col-xxl-12" >
                                    <div class=" border bg-white border-0 rounded-3" >
                                        <div class="row justify-content-xxl-around container-fluid" >
                                        <div class="col-xxl-2 col-md-12 col-xl-1">
                                            <img src="/Image/Capture3.jpg" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 2rem;width: 2rem; border-radius: 16px">
                                        </div>
                                        <div class="col-xxl-6 col-md-12 col-xl-11 align-self-center">
                                            <div style="font-weight: 500;font-size: 15px">Bata</div>
                                            <span style="font-size: 10px">Hi, What is your query?</span>
                                        </div>
                                            <div class="col-xxl-3 col-md-12 col-xl-3 align-self-center">

                                                <div class="text-muted my-md-2 my-xxl-0" style="font-size: 12px">11:03 am</div>
                                                <div class="d-flex justify-content-center my-2 rounded-circle bg-warning" style="height: 25px; width: 25px;margin: 25px">1</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12" >
                                    <div class=" border bg-white border-0 rounded-3" >
                                        <div class="row justify-content-xxl-around container-fluid" >
                                            <div class="col-xxl-2 col-md-12">
                                                <img src="https://www.investnational.com.au/wp-content/uploads/2016/08/person-stock-2.png" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 2rem;width: 2rem; border-radius: 16px">
                                            </div>
                                            <div class="col-xxl-6 col-md-12 align-self-center">
                                                <div style="font-weight: 500;font-size: 15px">Bata</div>
                                                <span style="font-size: 10px">Hi, What is your query?</span>
                                            </div>
                                            <div class="col-xxl-3 col-md-12 align-self-center">

                                                <div class="text-muted my-md-2 my-xxl-0" style="font-size: 12px">11:03 am</div>
                                                <div class="d-flex justify-content-center my-2 rounded-circle bg-warning" style="height: 25px; width: 25px;margin: 25px">1</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12" >
                                    <div class=" border bg-white border-0 rounded-3" >
                                        <div class="row justify-content-xxl-around container-fluid" >
                                            <div class="col-xxl-2 col-md-12">
                                                <img src="/Image/Capture3.jpg" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 2rem;width: 2rem; border-radius: 16px">
                                            </div>
                                            <div class="col-xxl-6 col-md-12 align-self-center">
                                                <div style="font-weight: 500;font-size: 15px">Bata</div>
                                                <span style="font-size: 10px">Hi, What is your query?</span>
                                            </div>
                                            <div class="col-xxl-3 col-md-12 align-self-center">

                                                <div class="text-muted my-md-2 my-xxl-0" style="font-size: 12px">11:03 am</div>
                                                <div class="d-flex justify-content-center my-2 rounded-circle bg-warning" style="height: 25px; width: 25px;margin: 25px">1</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12" >
                                    <div class=" border bg-white border-0 rounded-3" >
                                        <div class="row justify-content-xxl-around container-fluid" >
                                            <div class="col-xxl-2 col-md-12">
                                                <img src="https://www.investnational.com.au/wp-content/uploads/2016/08/person-stock-2.png" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 2rem;width: 2rem; border-radius: 16px">
                                            </div>
                                            <div class="col-xxl-6 col-md-12 align-self-center">
                                                <div style="font-weight: 500;font-size: 15px">Bata</div>
                                                <span style="font-size: 10px">Hi, What is your query?</span>
                                            </div>
                                            <div class="col-xxl-3 col-md-12 align-self-center">

                                                <div class="text-muted my-md-2 my-xxl-0" style="font-size: 12px">11:03 am</div>
                                                <div class="d-flex justify-content-center my-2 rounded-circle bg-warning" style="height: 25px; width: 25px;margin: 25px">1</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12" >
                                    <div class=" border bg-white border-0 rounded-3" >
                                        <div class="row justify-content-xxl-around container-fluid" >
                                            <div class="col-xxl-2 col-md-12">
                                                <img src="/Image/Capture3.jpg" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 2rem;width: 2rem; border-radius: 16px">
                                            </div>
                                            <div class="col-xxl-6 col-md-12 align-self-center">
                                                <div style="font-weight: 500;font-size: 15px">Bata</div>
                                                <span style="font-size: 10px">Hi, What is your query?</span>
                                            </div>
                                            <div class="col-xxl-3 col-md-12 align-self-center">

                                                <div class="text-muted my-md-2 my-xxl-0" style="font-size: 12px">11:03 am</div>
                                                <div class="d-flex justify-content-center my-2 rounded-circle bg-warning" style="height: 25px; width: 25px;margin: 25px">1</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-12" >
                                    <div class=" border bg-white border-0 rounded-3" >
                                        <div class="row justify-content-around container-fluid" >
                                            <div class="col-2 ">
                                                <img src="https://www.investnational.com.au/wp-content/uploads/2016/08/person-stock-2.png" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 2rem;width: 2rem; border-radius: 16px">
                                            </div>
                                            <div class="col-6 align-self-center">
                                                <div style="font-weight: 500;font-size: 15px">Bata</div>
                                                <span style="font-size: 10px">Hi, What is your query?</span>
                                            </div>
                                            <div class="col-3 align-self-center">

                                                <div class="text-muted" style="font-size: 12px">11:03 am</div>
                                                <div class="d-flex justify-content-center my-2 rounded-circle bg-warning" style="height: 25px; width: 25px;margin: 25px">1</div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="p-2 border bg-white border-0 rounded-3">

                                        <button type="button" class="btn btn-warning w-100 p-2">+ New Chat</button>

                                    </div>
                                </div>




                            </div>


                    </div>
                    <div class="col-xxl-6 col-md-9 my-4">
                        <div class="row bg-white">
                            <div class="col-12">

                                <div class="row  rounded-3 justify-content-start shadow  ">

                                    <div class="col-1">
                                        <img src="https://1.bp.blogspot.com/-WTankH4frZQ/YDQ6CBCqugI/AAAAAAAAVxY/OeeINW2EWGgeKhftkNRATJ1pSHdf8naNACLcBGAsYHQ/s2048/Bata%2BShoes2.png" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 3rem;width: 3rem; border-radius: 16px">
                                    </div>
                                    <div class="col-3 align-self-center mx-3">
                                        <div>Bata</div>
                                        <div class="row my-2">
                                        <div class="col-2 rounded-circle  mx-2" style="height: 25px; width: 25px;background:  #54F37A;"></div>
                                        <div class="col-4 my-1" style="color: #54F37A; font-weight: 600">Online</div>
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="col-12 my-5">
                                <div class="row"></div>
                                <div class="row " >
                                    <div class="row ">
                                        <div class="col-1 ">
                                            <div>
                                                <img src="https://www.investnational.com.au/wp-content/uploads/2016/08/person-stock-2.png" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 3rem;width: 3rem; border-radius: 16px">
                                            </div>
                                        </div>

                                        <div class="col-10 my-2">

                                            <div class="col-12 text-muted" style="font-weight: 500; font-size: 11px">11.00am</div>
                                            <div class="col-12">

                                                <div class=" rounded-2" style="background: #E7F4F4">
                                                    <p class="p-2" style="font-size: 12px">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="row " >
                                    <div class="row ">
                                        <div class="col-1 ">
                                            <div>
                                                <img src="/Image/Capture3.jpg" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 3rem;width: 3rem; border-radius: 16px">
                                            </div>
                                        </div>

                                        <div class="col-10 my-2">

                                            <div class="col-12 text-muted" style="font-weight: 500; font-size: 11px">11.00am</div>
                                            <div class="col-12">

                                                <div class=" rounded-2" style="background: #E7F4F4">
                                                    <p class="p-2" style="font-size: 12px">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="row " >
                                    <div class="row ">
                                        <div class="col-1 ">
                                            <div>
                                                <img src="https://www.investnational.com.au/wp-content/uploads/2016/08/person-stock-2.png" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 3rem;width: 3rem; border-radius: 16px">
                                            </div>
                                        </div>

                                        <div class="col-10 my-2">

                                            <div class="col-12 text-muted" style="font-weight: 500; font-size: 11px">11.00am</div>
                                            <div class="col-12">

                                                <div class=" rounded-2" style="background: #E7F4F4">
                                                    <p class="p-2" style="font-size: 12px">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="row " >
                                    <div class="row ">
                                        <div class="col-1 ">
                                            <div>
                                                <img src="/Image/Capture3.jpg" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 3rem;width: 3rem; border-radius: 16px">
                                            </div>
                                        </div>

                                        <div class="col-10 my-2">

                                            <div class="col-12 text-muted" style="font-weight: 500; font-size: 11px">11.00am</div>
                                            <div class="col-12">

                                                <div class=" rounded-2" style="background: #E7F4F4">
                                                    <p class="p-2" style="font-size: 12px">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="row " >
                                    <div class="row ">
                                        <div class="col-1 ">
                                            <div>
                                                <img src="https://www.investnational.com.au/wp-content/uploads/2016/08/person-stock-2.png" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 3rem;width: 3rem; border-radius: 16px">
                                            </div>
                                        </div>

                                        <div class="col-10 my-2">

                                            <div class="col-12 text-muted" style="font-weight: 500; font-size: 11px">11.00am</div>
                                            <div class="col-12">

                                                <div class=" rounded-2" style="background: #E7F4F4">
                                                    <p class="p-2" style="font-size: 12px">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="row " >
                                    <div class="row ">
                                        <div class="col-1 ">
                                            <div>
                                                <img src="/Image/Capture3.jpg" class="card-img-top rounded-circle mx-auto my-4" alt="" style="height: 3rem;width: 3rem; border-radius: 16px">
                                            </div>
                                        </div>

                                        <div class="col-10 my-2">

                                            <div class="col-12 text-muted" style="font-weight: 500; font-size: 11px">11.00am</div>
                                            <div class="col-12">

                                                <div class=" rounded-2" style="background: #E7F4F4">
                                                    <p class="p-2" style="font-size: 12px">
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                        Lorem Ipsum is simply dummy text of the printing and
                                                        typesetting
                                                        industry.
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-10 ">

                                        <div class="input-group">
                                            <input class="form-control border-end-0 border border-danger" type="search" value="search" id="example-search-input">
                                            <span class="input-group-append">
                                        <button class="btn btn-outline-secondary border-danger bg-white   border" type="button">
                                         <i class="fa fa-link"></i>
                                         </button>
                                         </span>
                                        </div>


                                    </div>
                                    <div class="col-2 d-flex justify-content-end">
                                        <button type="button" class="btn btn-danger w-100">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 " >dehed</div>

                    </div>


            </div>
        </div>
    </div>

@endsection
