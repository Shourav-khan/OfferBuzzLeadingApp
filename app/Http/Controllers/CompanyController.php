<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Company;
use App\Models\Status;
use Illuminate\Http\Request;
use function Sodium\add;

class CompanyController extends Controller
{
    public function index()
    {
        $companies= Company::all();
        return view('pages.company-page.allCompanies',compact(['companies']));
    }

    public function create()
    {
        $businesses = (new BusinessController())->getAllBusinesses();
        return view('pages.company-page.companyForm', compact(['businesses']));
    }

    public function store(Request $request)
    {

        $this->companyRequestValidator($request);

        $company = Company::create($request->except(['business_id', 'title']));

        $company->businesses()->attach($request->business_id);

        return redirect()->route('companies.index')
            ->with('success','company created successfully');


    }

    public function show(Company $company)
    {
        return view('pages.company-page.companyDetails',compact('company'));
    }

    public function edit(Company $company)
    {
        return view('pages.company-page.editForm', compact(['company']));
    }

    public function update(Request $request, Company $company)
    {
        $this->companyRequestValidator($request);

        $company->update($request->all());

        return redirect()->route('companies.index')
            ->with('success','company updated successfully');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')
            ->with('delete','company deleted successfully');
    }


    public function companyRequestValidator(Request $request){
        $request ->validate([
            'owner_name'=>'required',
            'owner_designation'=>'required',
            'company_name'=>'required',
            'phone'=>'required',
            'title'=>'required',
            'email'=>'required',
            'gstin'=>'required',
            'address'=>'required',
            'business_id'=>'required',
            'company_status_id'=>'required',
            'member_since'=>'required'
        ]);



    }


}
