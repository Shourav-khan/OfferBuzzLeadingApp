@extends('welcome')
@section('content')

<div class="container-fluid">




    <div class="row" style="background: #F5F5F5">

{{--        menuBar--}}
        @include('menuBar')

{{--        form--}}
        <div class="col-xxl-10 col-xl-9">


                  {{-- Arrow 2nd--}}
                <div class="row container-fluid justify-content-start">

                        <div class=" mt-3" style="font-size: 25px">
                            <a href="/projects" class=" bi bi-arrow-left text-black "></a>
                        </div>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                <div class="col-xxl-12 text-center font-style rounded-1" style="background: #F6B301;color: white; letter-spacing: 1px; font-size: 22px; height: 50px">
                    <div class="my-2">Create Project</div>
                </div>
                <div class="col-xxl-12 my-1 rounded-1" style="background: #FFFFFF">
                    <div class=" mx-2 my-3" >
                        <form class="row g-3 p-2" action="{{route('project.store')}}" method="POST">
                            @csrf
                            <div class="col-xxl-12 col-xl-12">
                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Project Title</label>
                                <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="Write the project title">
                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Location</label>
                                <select class="form-select " multiple="multiple" name="territory_id[]" aria-label="Default select example">

                                    @foreach($territories as $territory)
                                        <option  value="{{ $territory->id }}">{{ $territory->title }}</option>
                                    @endforeach

{{--                                    @php--}}

{{--                                    $tests = array();--}}
{{--                                    $check = false;--}}

{{--                                    @endphp--}}

{{--                                    @if($project->territories)--}}
{{--                                        @foreach($territories as $territory)--}}
{{--                                            @foreach($project->territories as $projectTerritory)--}}

{{--                                                @if($territory->id == $projectTerritory->id)--}}
{{--                                                    <option  value="{{ $territory->id }}" selected="selected">{{ $territory->title }}</option>--}}
{{--                                                    @php--}}
{{--                                                    $check = false;--}}
{{--                                                    @endphp--}}
{{--                                                    @break--}}

{{--                                                @else--}}
{{--                                                    @php--}}
{{--                                                        $check = true;--}}
{{--                                                    @endphp--}}

{{--                                                @endif--}}

{{--                                            @endforeach--}}

{{--                                            @if($check)--}}
{{--                                                    <option  value="{{ $territory->id }}" selected="selected">{{ $territory->title }}</option>--}}
{{--                                                @endif--}}
{{--                                        @endforeach--}}

{{--                                    @else--}}

{{--                                        @foreach($territories as $territory)--}}
{{--                                            <option  value="{{ $territory->id }}" selected="selected">{{ $territory->title }}</option>--}}
{{--                                        @endforeach--}}

{{--                                    @endif--}}


                                </select>
                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Target</label>
                                <input type="text"  name="project_targets" class="form-control" id="inputEmail4" placeholder="Write the target">


                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Start Date</label>
                                <input type="date" name="start_date" class="form-control" id="inputEmail4" placeholder="">
                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Due Date</label>
                                <input type="date" name="due_date" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Assigned Team</label>

                                <select class="form-select"  name="team_id[]" multiple="multiple" aria-label="Default select example">

                                    @foreach($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->name }}</option>
                                    @endforeach




                                </select>
                            </div>
                            <div class="col-xxl-6 col-xl-6">
                                <label for="inputEmail4" class="form-label font-style fs-5 text-muted">Reporting To</label>

                                <select class="form-select"   name="report_to" multiple="multiple" aria-label="Default select example">

                                    @foreach($users as $user)
                                        <option  value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach




                                </select>
                            </div>
                            <div class="col-lg-12 col-xl-12">
                                <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                                <textarea name="description"  id="summernote"></textarea>
                            </div>
                            <div class="col-12 col-xl-12 text-center">
                                <button type="submit" class="btn btn-danger" style="width: 100px">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
