@extends('welcome')
@section('content')

    <div class="container-fluid">



        <div class="row" style="background: #F5F5F5; font-family: 'Montserrat', sans-serif">


            @include('menuBar')


            <div class="col-xxl-10 col-xl-9  my-4" style="padding-right: 40px">

                    <div class="row py-4 bg-white border" >
                        <div class="fs-4 " style="font-weight: 500">Schedule</div>












                        <div class="row my-4" >
                            <div class="col-xxl-12 col-md-12">

                                <div class="row justify-content-between">
                                    <div class="col-xxl-5 col-md-5" >
                                        <div class="row justify-content-start p-2">


                                            <div class="col-xxl-2 col-md-3">
                                                <div class="text-muted">Training</div>
                                            </div>
                                            <div class="col-xxl-3  col-md-5">
                                                @for($i=0;$i<3;$i++)
                                                <img src="https://cdn.psychologytoday.com/sites/default/files/styles/article-inline-half-caption/public/field_blog_entry_images/2018-09/shutterstock_648907024.jpg?itok=0hb44OrI" alt="..."
                                                     class="rounded-circle border border-dark" style="width: 40px; height: 35px">
                                                @endfor
                                            </div>
                                            <div class="col-xxl-2 col-md-2 my-xxl-1">
                                                <div class="text-danger" style="font-weight: 500;font-size: 13px">Add People</div>
                                            </div>
                                        </div>
                                    </div>


                                <div class="col-xxl-5 col-md-5" >
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-8 col-md-9" style="margin-left: 22px">
                                            <div class="row justify-content-center" >


                                                <div class="col-xxl-2 col-md-3">
                                                    <div class="text-muted">Trainer:</div>
                                                </div>
                                                <div class="col-xxl-4 col-md-4 mx-3">
                                                    <img src="/Image/Capture3.jpg" alt="..."
                                                         class="rounded-circle border border-dark" style="height: 30px; width: 35px">

                                                </div>
                                                <div class="col-xxl-5 col-md-2 my-xxl-1">
                                                    <div class="text-danger" style="font-weight: 500;font-size: 13px">Add People</div>
                                                </div>
                                                <div class="text-muted ">Location: Main Office</div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                </div>


                            </div>

                        </div>
































                        <div class="row">
                            <div class="col-8">


                                <div id='calendar'></div>

                            </div>
                            <div class="col-4">
                                <div class="row border p-2 p-3">
                                    <div class="col-8 my-2" style="font-weight: 600">Event</div>
                                    <div class="col-4">
                                        <button type="button" class="btn border"> <a href="{{route('even.create')}}" style="text-decoration: none;color: black"> Create Event</a> </button>
                                    </div>
                                </div>


                                <div class="row border p-2">

                                    <div class="col-12">
                                        <div class="row justify-content-start">
                                            <div class="col-3" style="font-weight: 500">Today</div>
                                            <div class="col-3" style="font-weight: 500">Week</div>
                                            <div class="col-3" style="font-weight: 500">Month</div>
                                        </div>
                                    </div>


                                    <div class="row my-5">
                                        <div class="col-xxl-12">


                                            <div class="row">
                                                <div class="col-3">
                                                    <div style="font-weight: 500">11.00 AM</div>
                                                </div>
                                                <div class="col-9">
                                                    <div class=" rounded-2" style="background: #E7F4F4">
                                                        <p class="p-2" style="font-size: 12px">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry.
                                                    </div>
                                                </div>
                                            </div>


                                            {{--<hr class="my-0" />--}}


                                        </div>
                                        <div class="col-xxl-12">


                                            <div class="row">
                                                <div class="col-3">
                                                    <div style="font-weight: 500">11.00 AM</div>
                                                </div>
                                                <div class="col-9">
                                                    <div class=" rounded-2" style="background: #E7F4F4">
                                                        <p class="p-2" style="font-size: 12px">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry.
                                                    </div>
                                                </div>
                                            </div>


                                            {{--<hr class="my-0" />--}}


                                        </div>
                                        <div class="col-xxl-12">


                                            <div class="row">
                                                <div class="col-3">
                                                    <div style="font-weight: 500">11.00 AM</div>
                                                </div>
                                                <div class="col-9">
                                                    <div class=" rounded-2" style="background: #E7F4F4">
                                                        <p class="p-2" style="font-size: 12px">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry.
                                                    </div>
                                                </div>
                                            </div>


                                            {{--<hr class="my-0" />--}}


                                        </div>
                                        <div class="col-xxl-12">


                                            <div class="row">
                                                <div class="col-3">
                                                    <div style="font-weight: 500">11.00 AM</div>
                                                </div>
                                                <div class="col-9">
                                                    <div class=" rounded-2" style="background: #E7F4F4">
                                                        <p class="p-2" style="font-size: 12px">
                                                            Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting
                                                            industry.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12">


                                                <div class="row">
                                                    <div class="col-3">
                                                        <div style="font-weight: 500">11.00 AM</div>
                                                    </div>
                                                    <div class="col-9">
                                                        <div class=" rounded-2" style="background: #E7F4F4">
                                                            <p class="p-2" style="font-size: 12px">
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting
                                                                industry.
                                                        </div>
                                                    </div>
                                                </div>


                                                {{--<hr class="my-0" />--}}


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
