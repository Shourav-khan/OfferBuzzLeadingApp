@extends('welcome')
@section('content')

    <div class="container-fluid">




        <div class="row" style="background: #F5F5F5; font-family: 'Montserrat', sans-serif">

            @include('menuBar')

            <div class="col-xxl-10 col-xl-9 my-1">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <a href="{{route('project.team.members')}}" class="bi bi-arrow-left fs-2 text-black d-md-none d-lg-none d-xl-block"></a>
                        <div class="row mt-2 mx-2">
                            <div class="col-5 ">
                                <li class="breadcrumb-item "><a href="#" class="text-black text-decoration-none">Team</a></li>
                            </div>
                            <div class="col-2">/</div>
                            <div class="col-5">
                                <li class="breadcrumb-item  text-black " aria-current="page"><a href="#" class="text-black text-decoration-none ">Details</a></li>
                            </div>
                        </div>

                    </ol>
                </nav>


                   <div class="row">
                       <div class="col-xxl-9 col-md-12">


                           <div class=" row pe-xxl-4 p-md-3 p-xxl-0">
                               <div class="col-12" >

                                   <div class="row " style="background: #F6B301">
                                       <div class="col-12 text-center p-3 fs-5  my-1" style="font-weight: 500">Team Name</div>

                                   </div>

                               </div>
                               <div class="col-12">
                                   <div class="row bg-white shadow-sm">
                                       <div class="col-12" >
                                           <div class="row p-4">
                                               <div class="col-12">
                                                   <div class="fs-5 text-center" style="font-weight: 600">Project : Simple Projects</div>
                                                   <span class="d-flex justify-content-center text-muted" style="font-weight: 500">Location: Shantinagar</span>
                                               </div>
                                               <div class="col-12">
                                                   <div class="row fs-6 text-muted" style="font-weight: 500">
                                                       <div class="col-6 ">
                                                           <div >Start Date:11/05/22</div>
                                                           <span>Due Date:11/05/22</span>
                                                       </div>
                                                       <div class="col-6 text-end">
                                                           <div >Target: 120</div>
                                                           <span>Complete Lead: 40</span>
                                                       </div>
                                                   </div>
                                                   <hr style="border: 1.5px solid black">
                                               </div>
                                               <div class="col-12">
                                                   <div class="row">
                                                       <div class="col-4" style=" border-right:2px solid darkgrey;">
                                                           <div class="p-3 text-center text-muted" style="font-weight: 600">Team Leader</div>
                                                           <img src="https://st.depositphotos.com/1017986/4262/i/450/depositphotos_42627223-stock-photo-businessman-in-office-showign-thumbs.jpg" class="card-img-100 mx-auto d-block rounded-circle" alt="..." style="width: 7rem; height: 7rem">

                                                           <div class="text-muted fs-5 text-center">Team Members</div>
                                                           <div class="text-center text-muted " style="letter-spacing: 1px">Team Name</div>

                                                           <div class="row my-2 justify-content-evenly">
                                                               <div class="col-xxl-2 col-md-4 text-danger" style="font-weight: 500">View</div>
                                                               <div class="col-xxl-4 col-md-4 text-danger" style="font-weight: 500">Add Role+</div>
                                                               <div class="col-xxl-2 col-md-4 text-danger" style="font-weight: 500">Delete</div>
                                                           </div>

                                                       </div>





                                                       <div class="col-8">

                                                           <div class="row" >
                                                             <div class="col-12">
                                                                 <div class="row p-2 my-2 justify-content-between">
                                                                 <div class="col-xxl-4  col-md-4">
                                                                     <div class="text-center text-muted" style="font-weight: 600">Team Member</div>
                                                                 </div>
                                                                 <div class="col-xxl-5  col-md-8">
                                                                     <div class="col-4 text-danger" style="font-weight: 500">Add Team+</div>
                                                                 </div>
                                                                 </div>

                                                             </div>


                                                               <div class="col-12 my-3">
                                                                   <div class="row">
                                                                       <div class="col-6">
                                                                           <div class="row">
                                                                               <div class="col-5">

                                                                                <div class="row">
                                                                                    <div class="col-12">
                                                                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRNCDplD_v_1KfSNO0zhO-6nSru6ntFmQkNBH7HAFqi_LJbwX2ejLIBOKx7_3Ju97AU_s&usqp=CAU" class="card-img-100 mx-auto d-block rounded-circle" alt="..." style="width: 4rem; height: 4rem">

                                                                                    </div>
                                                                                    <div class="col-xxl-12">
                                                                                        <div class="row my-3 mx-3">
                                                                                            <div class="col-xxl-6 col-md-12 col-lg-6">
                                                                                                <div class="col-4 text-danger" style="font-weight: 500"><a href="{{route('team.profile')}}" style="text-decoration: none; color: #CB0E00">Edit</a></div>
                                                                                            </div>
                                                                                            <div class="col-xxl-6 col-md-12 col-lg-6">
                                                                                                <div class="col-4 text-danger" style="font-weight: 500"><a href="{{route('team.profile')}}" style="text-decoration: none; color: #CB0E00">View</a></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                               </div>
                                                                               <div class="col-7 my-2">
                                                                                   <div class="text-muted" style="font-weight: 500; font-size: 16px; letter-spacing: -1px">Kevin Milgren</div>
                                                                                   <span class="fs-4 text-muted" style="font-weight: 600">20/40</span>
                                                                               </div>
                                                                           </div>
                                                                       </div>

                                                                       <div class="col-6">
                                                                           <div class="row">
                                                                               <div class="col-5">

                                                                                   <div class="row">
                                                                                       <div class="col-12">
                                                                                           <img src="https://img.freepik.com/free-photo/close-up-young-successful-man-smiling-camera-standing-casual-outfit-against-blue-background_1258-66609.jpg?w=2000" class="card-img-100 mx-auto d-block rounded-circle" alt="..." style="width: 4rem; height: 4rem">

                                                                                       </div>
                                                                                       <div class="col-12">
                                                                                           <div class="row my-3 mx-3">
                                                                                               <div class="col-6">
                                                                                                   <div class="col-4 text-danger" style="font-weight: 500"><a href="{{route('team.profile')}}" style="text-decoration: none; color: #CB0E00">Edit</a></div>
                                                                                               </div>
                                                                                               <div class="col-6">
                                                                                                   <div class="col-4 text-danger" style="font-weight: 500"><a href="{{route('team.profile')}}" style="text-decoration: none; color: #CB0E00">View</a></div>
                                                                                               </div>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>


                                                                               </div>
                                                                               <div class="col-7 my-2">
                                                                                   <div class="text-muted" style="font-weight: 500; font-size: 16px; letter-spacing: -1px">Stephen</div>
                                                                                   <span class="fs-4 text-muted" style="font-weight: 600">50/90</span>
                                                                               </div>
                                                                           </div>
                                                                       </div>

                                                                   </div>
                                                               </div>

                                                               <div class="col-12">
                                                                   <div class="row">
                                                                       <div class="col-6">
                                                                           <div class="row">
                                                                               <div class="col-5">

                                                                                   <div class="row">
                                                                                       <div class="col-12">
                                                                                           <img src="https://media.istockphoto.com/photos/portrait-of-young-farm-worker-smiling-picture-id996969548?b=1&k=20&m=996969548&s=170667a&w=0&h=cQL_4UWoVVjTY4v5J4YVDydlk0D6taKf50aAbh-f_XU=" class="card-img-100 mx-auto d-block rounded-circle" alt="..." style="width: 4rem; height: 4rem">

                                                                                       </div>
                                                                                       <div class="col-12">
                                                                                           <div class="row my-3 mx-3">
                                                                                               <div class="col-6">
                                                                                                   <div class="col-4 text-danger" style="font-weight: 500"><a href={{route('team.profile')}} style="text-decoration: none; color: #CB0E00">Edit</a></div>
                                                                                               </div>
                                                                                               <div class="col-6">
                                                                                                   <div class="col-4 text-danger" style="font-weight: 500"><a href={{route('team.profile')}} style="text-decoration: none; color: #CB0E00">View</a></div>
                                                                                               </div>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>


                                                                               </div>
                                                                               <div class="col-7 my-2">
                                                                                   <div class="text-muted" style="font-weight: 500; font-size: 16px; letter-spacing: -1px">Norton Bella</div>
                                                                                   <span class="fs-4 text-muted" style="font-weight: 600">19/60</span>
                                                                               </div>
                                                                           </div>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>

                                                       </div>
                                                   </div>
                                               </div>



                                           </div>




                                       </div>
                                   </div>
                               </div>
                           </div>

                       </div>


                       <div class="col-xxl-3 col-md-12 my-md-4 my-xxl-0">

                           <div class="pe-xxl-4">
                               <div class="justify-content-evenly row  ">
                                   <div class="col-xxl-12  col-md-4">
                                       <div class="row bg-white border-0 rounded-2">
                                           <h6 class="text-muted my-1 text-center p-2"> Assign Employee</h6>

                                           <div class=" my-4">
                                               <form class="my-2">
                                                   <div class="mb-3">

                                                       <div class="col-12">
                                                           <label for="inputEmail4" class="form-label">Employee</label>
                                                           <select id="inputState" class="form-select text-muted fs-6">
                                                               <option selected >Add Employee</option>
                                                               <option>...</option>
                                                           </select>
                                                       </div>
                                                   </div>

                                                   <div class="mb-3">
                                                       <label for="inputEmail4" class="form-label">Target</label>
                                                       <input type="" class="form-control" id="" placeholder="Target">
                                                   </div>
                                                   <div class="mb-3">
                                                       <label for="validationTextarea" class="form-label">Description</label>
                                                       <textarea class="form-control" id="validationTextarea" placeholder="Description"></textarea>
                                                   </div>

                                                   <div class="col-12 text-center">
                                                   <button type="submit" class="btn btn-secondary w-25 border-0" style="background: #F6B301">Send</button>
                                                   </div>
                                               </form>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-xxl-12 col-md-4 my-xxl-4">
                                       <div class="row bg-white border-0 rounded-2 p-2">
                                           <h6 class="text-muted my-1 text-center p-2"> Assign Employee</h6>

                                           <div class="my-4">
                                               <form class="my-2">
                                                   <div class="mb-3">

                                                       <div class="col-12">
                                                           <label for="inputEmail4" class="form-label">Employee</label>
                                                           <select id="inputState" class="form-select text-muted fs-6">
                                                               <option selected >Add Employee</option>
                                                               <option>...</option>
                                                           </select>
                                                       </div>
                                                   </div>

                                                   <div class="mb-3">
                                                       <label for="inputEmail4" class="form-label">Target</label>
                                                       <input type="" class="form-control" id="" placeholder="Target">
                                                   </div>
                                                   <div class="mb-3">
                                                       <label for="validationTextarea" class="form-label">Description</label>
                                                       <textarea class="form-control" id="validationTextarea" placeholder="Description"></textarea>
                                                   </div>

                                                   <div class="col-12 text-center">
                                                       <button type="submit" class="btn btn-secondary w-25 border-0" style="background: #F6B301">Send</button>
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

        </div>

    </div>

@endsection
