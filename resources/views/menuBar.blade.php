



        <div class="col-md-12 col-xxl-2 col-xl-3 col-lg-12" >

            <div class="px-3">

                <div class="row">





                            <div class="card " style="border: none;background: #F5F5F5;">
                                <img src="/Image/Capture3.jpg" class="card-img-top rounded-circle mx-auto my-3" alt="" style="height: 8rem;width: 8rem">
                                <div class="card-body">

                                    <div class="row">
                                        <div class=" font-style card-title text-center text-muted">
                                            Team Member
                                            <br/>
                                            <span class=" text-center text-muted fs-6">Team name</span>
                                        </div>
                                    </div>


                                </div>

                                <div class="list-group text-white">



                                    <a  href="{{ route("dashboard") }}" class="list-group-item list-group-item-action {{ Route::is('dashboard') ? 'active text-white' : 'text-muted' }}" style="border: none">
                                        <div class="row">
                                            <div class="col-4 text-center align-self-end "><i class="bi bi-bricks"></i></div>
                                            <div class="col-8 align-self-end font-style  fs-6">DASHBOARD</div>
                                        </div>
                                    </a>


                                    <a href="{{route('project.list')}}" class="{{  request()->routeIs('project.list') ? 'active text-white' : 'text-muted' }} list-group-item list-group-item-action my-2" style="border: none">
                                        <div class="row ">
                                            <div class="col-4 text-center "><i class="bi bi-bullseye"></i></div>
                                            <div class="col-8 font-style  fs-6">PROJECT</div>
                                        </div>
                                    </a>

                                    <a href="{{route('project.lead.detail')}}" class=" {{  request()->routeIs('project.lead.detail') ? 'active text-white' : 'text-muted' }} list-group-item list-group-item-action my-1" style="border: none">
                                        <div class="row ">
                                            <div class="col-4 text-center"><i class="bi bi-reception-4"></i></div>
                                            <div class="col-8 font-style  fs-6">LEADS</div>
                                        </div>
                                    </a>

                                    <a href="{{route('team.project.member')}}" class=" {{  request()->routeIs('project.team.members') ? 'active text-white' : 'text-muted' }} list-group-item list-group-item-action my-1" style="border: none">
                                        <div class="row ">
                                            <div class="col-4 text-center "><i class="bi bi-people-fill"></i></div>
                                            <div class="col-8 font-style  fs-6">TEAM</div>
                                        </div>
                                    </a>

                                    <a href="{{route('schedule')}}" class=" {{  request()->routeIs('schedule') ? 'active text-white' : 'text-muted' }} list-group-item list-group-item-action my-1" style="border: none">
                                        <div class="row ">
                                            <div class="col-4 text-center "><i class="bi bi-clock"></i></div>
                                            <div class="col-8 font-style  fs-6">SCHEDULE</div>
                                        </div>
                                    </a>

                                    <a href="{{route('companies.index')}}" class=" {{  request()->routeIs('companies.*') ? 'active text-white' : 'text-muted' }} list-group-item list-group-item-action my-1" style="border: none">
                                        <div class="row ">
                                            <div class="col-4 text-center "><i class="bi bi-briefcase-fill"></i></div>
                                            <div class="col-8 font-style  fs-6">COMPANY</div>
                                        </div>
                                    </a>

                                    <a href="{{route('messages')}}" class=" {{  request()->routeIs('messages') ? 'active text-white' : 'text-muted' }} list-group-item list-group-item-action my-1" style="border: none">
                                        <div class="row ">
                                            <div class="col-4 text-center"><i class="bi bi-reception-4"></i></div>
                                            <div class="col-8 font-style fs-6">MESSAGES</div>
                                        </div>
                                    </a>

                                    <a href="{{route('profile.create')}}" class=" {{  request()->routeIs('profile.create') ? 'active text-white' : 'text-muted' }} list-group-item list-group-item-action my-1" style="border: none">
                                        <div class="row ">
                                            <div class="col-4 text-center " ><i class="bi bi-gear-fill"></i></div>
                                            <div class="col-8 font-style  fs-6">SETTINGS</div>
                                        </div>
                                    </a>
                                    <br>
                                    <br>

                                    <a href="#" class="  list-group-item list-group-item-action my-1" style="border: none">
                                        <div class="row ">
                                            <div class="col-4 text-center text-muted"><i class="bi bi-gear-fill"></i></div>
                                            <div class="col-8 font-style text-muted fs-6">LOG OUT</div>
                                        </div>
                                    </a>




                                </div>

                            </div>









                </div>

            </div>


        </div>


















