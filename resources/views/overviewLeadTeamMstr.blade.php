



<div class=" mt-0" >

       <a href="{{route('project.overview.show',['project'=>$project])}} "  style="text-decoration: none;">


               <button type="button" class=" {{  request()->routeIs('project.overview.show') ? 'active text-white' : '' }} btn  btn-md mt-2 border-danger " >
                   Overview
               </button>


       </a>


        <a href="{{route('project.lead.list', ['project'=> $project])}}" style="color: black;text-decoration: none ">
            <button type="button" class=" {{  request()->routeIs('project.lead.list') ? 'active text-white' : '' }} btn  btn-md mt-2 border-danger" >
                Lead
            </button>
        </a>


        <a href="{{route('project.team', ['project'=> $project])}}" style="color: black;text-decoration: none ">
            <button type="button" class=" {{  request()->routeIs('project.team') ? 'active text-white' : '' }} btn  btn-md mt-2 border-danger" >
                Team
            </button>
        </a>

    <div class="row" style="border: solid 1px darkgrey"></div>

</div>
