<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use App\Models\Lead;
use App\Models\LeadAdditional;
use App\Models\Status;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $leads=Lead::all();
        return view('pages.leads-page.projectLead',compact(['leads']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {

        $leadInfo= Lead::all();
        $leadAdditionalInfo = LeadAdditional::all();
        $users = User::all();
        $statuses=Status::all();
        return view('pages.leads-page.createLead',compact(['leadInfo','leadAdditionalInfo','users','statuses']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show( Lead $lead )
    {
//        $user = User::find($lead->employee_id);
//        $userDetail = UserDetail::where("user_id", "=", $user->id)->first();
//        $designation = Designation::find($userDetail->designation_id);
//        $leadAdditional = LeadAdditional::where('laed_id', '=', $lead->id )->first();
//        dd($leadAdditional);




        return view('pages.leads-page.employeeDetails',compact(['lead']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        //
    }


    public function allLeads()
    {
        return Lead::all();
    }

    public function leadValidate(Request $request)
    {
        $request->validate([

            'company_name' => 'required',
            'owner_name' => 'required',
            'contact_person' => 'required',
            'state' => 'required',
            'email1' => 'required',
            'phone1' => 'required',
            'address1' => 'required',
            'source_by' => 'required',
            'lead_id' => 'required'
        ]);

    }

    public function getAllLeads()
    {
        return Lead::all();
    }
}
