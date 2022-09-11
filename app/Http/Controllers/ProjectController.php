<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Project;
use App\Models\ProjectTarget;
use App\Models\Team;
use App\Models\Territory;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $projects= Project::all();
        return view('pages.project-page.projects',compact(['projects']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create (Project $project)
    {

        $territories = (new TerritoryController())->territoryAll();
        $teams = (new TeamController())->getAllTeam();
        $users = (new UserDetailController())->getAllUsers();
        $projectTargets = (new ProjectTargetController())->getAllProjectTarget();
        return view('pages.project-page.projectCreate',compact(['territories','teams','users','projectTargets','project']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $this->projectRequestValidator($request);
        $project = Project::create($request->except('files','territory_id','team_id','project_targets'));

        $project->territories()->attach($request->territory_id);
        $project->teams()->attach($request->team_id);


        $projectTarget = new ProjectTarget();

        $projectTarget->title = $request->project_targets;
        $projectTarget->project_id = $project->id;
        $projectTarget->team_id = 1;
        $projectTarget->due_date = "2022-07-19";

        $projectTarget->save();

//        $project->territories($request->territory_id);
//        $project->teams($request->team_id);
//        $project->user($request->user_id);
//        $project->projectTargets($request->project_target_title->save());

        return redirect()->route('project.list')
            ->with('success','project created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Project $project)
    {

//        $teams = (new TeamController())->getAllTeam();

        return view('pages.project-page.overView', compact(['project']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Project $project)
    {

//        $territory = Territory::find($project->territory_id);
        $territories = (new TerritoryController())->territoryAll();
        $teamss=(new TeamController())->getAllTeam();
        $users= User::all();

        return view('pages.project-page.edit', compact(['project','users','territories','teamss']));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Project $project)
    {
        $this->projectRequestValidator($request);



        $project->territories()->detach();
        $project->territories()->attach($request->territory_id);

        $project->teams()->detach();
        $project->teams()->attach($request->team_id);




        $project->update($request->except('files','territory_id','team_id','project_targets'));

        return redirect()->route('project.list')
            ->with('success','Project edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project)
    {
        $project->delete();


        return redirect()->route('project.list')
            ->with('delete','Project deleted successfully');
    }

    public function lead(Project $project, Lead $lead){


//        $leads=(new LeadController())->allLeads();


        return view('pages.project-page.leads', compact(['project','lead']));

    }

    public function team(Project $project,Team $team)
    {

        $users = User::all();

        return view('pages.project-page.team',compact(['project','users','team']));
    }

    public function projectRequestValidator($request)
    {

        $request->validate([
            'title'=>'required',
            'territory_id'=>'required',
            'project_targets'=>'required',
            'start_date'=>'required',
            'due_date'=>'required',
            'team_id'=>'required',
            'report_to'=>'required',
            'description'=>'required'
        ]);
    }


    public function leadAllView(Project $project, Lead $lead)
    {


//        $leads=(new LeadController())->allLeads();

        return view('pages.project-page.leadView',compact(['project','lead']));
    }


    public function teamView(Project $project,Team $team)
    {


        return view('pages.project-page.teamView',compact(['project','team']));
    }


}
