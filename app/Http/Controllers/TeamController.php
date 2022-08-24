<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Territory;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $teams = Team::all();
        $territories = (new TerritoryController())->territoryAll();
        return view('pages.team-page.teamMembers', compact(['teams','territories']));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->teamCreateValidator($request);
        $team= Team::create($request->all());


        return redirect()->route('team.project.member')
            ->with('success','Team Added successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Team $team)
    {


        return view('pages.team-page.teamName');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Team $team)
    {

        return view('pages.team-page.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {

        $team->delete();

        return redirect()->route('team.project.member')
            ->with('delete','Team deleted successfully');
    }

    public function getAllTeam()
    {
        return Team::all();
    }

    public function teamCreateValidator( $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'territory_id'=>'required'

        ]);
    }
}
