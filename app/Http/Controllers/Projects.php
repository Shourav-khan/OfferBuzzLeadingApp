<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Projects extends Controller
{

    public function details()
    {

        return view('pages.project-page.projectsDetails');
    }

    public function projectLeadView()
    {
        return view('pages.leads-page.leadsView');
    }


    public function teamMembersView()
    {
        return view('pages.team-page.teamMembersView');
    }


    public function profileCreate()
    {
        return view('pages.settings-pages.profileCreate');
    }

    public function roleAndPermission()
    {
        return view('pages.settings-pages.roleAndPermissions');
    }

    public function roleAndPermissionView()
    {
        return view('pages.settings-pages.rolesAndPermissionView');
    }





}
