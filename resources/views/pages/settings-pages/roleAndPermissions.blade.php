@extends('welcome')
@section('content')

    <div class="container-fluid">



        <div class="row " style="background: #F5F5F5;font-family: 'Montserrat', sans-serif">

            {{--        menuBar--}}
            @include('menuBar')


            <div class="col-xxl-10 col-xl-9">

                    <div class="row  pe-xxl-4" >
                        <div class="col-xxl-8">

                  @include('rolesAndPermissionMaster')




                                    <div class="row g-3">
                                        <div class="col-4">
                                            <div class="p-3 border bg-white border-0 rounded-2">
                                                <div class="row">
                                                    <div style="font-weight: 500">Admin</div>
                                                    <div class="my-1" style="font-size: 13px">Assigned To You</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="p-3 border bg-white border-0 rounded-2">
                                                <div class="row">
                                                    <div style="font-weight: 500">Restricted User</div>
                                                    <div class="my-1" style="font-size: 13px">Not assigned to any user</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="p-3 border bg-white border-0 rounded-2">
                                                <div class="row">
                                                    <div style="font-weight: 500">Supervisor</div>
                                                    <div class="my-1" style="font-size: 13px">Assigned to 3 user</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="p-3 border bg-white border-0 rounded-2">
                                                <div class="row">
                                                    <div style="font-weight: 500">Tech Member</div>
                                                    <div class="my-1" style="font-size: 13px">Assigned to 21 user</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="p-3 border bg-white border-0 rounded-2">
                                                <div class="row">
                                                    <div style="font-weight: 500">Sales Manager</div>
                                                    <div class="my-1" style="font-size: 13px">Assigned to 21 user</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="p-4 border bg-white border-0 rounded-2">
                                                <div class="row ">
                                                    <div class="my-1" style="font-weight: 600">Create New Roles</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                        </div>

                            <div class="col-4 my-3">
                                <div class="row g-1">
                                    <div class="col-12">
                                        <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                            <div class="mx-4">New Role</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                            <div class="mx-4">Role Name</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                            <div class="mx-4">Organization Permissions</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                            <div class="mx-4">Manage Customizations</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                            <div class="mx-4">Lead Permissions</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                            <div class="mx-4">Manage Lead</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="p-3 border bg-white border-0 rounded-2" style="font-weight: 600">
                                            <div class="mx-4">Manage Settings</div>
                                        </div>
                                    </div>


                                </div>
                            </div>


                    </div>


            </div>




        </div>
    </div>

@endsection
