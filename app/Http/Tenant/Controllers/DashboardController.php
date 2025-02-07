<?php

namespace Xploro\Http\Tenant\Controllers;

use Illuminate\Http\Request;
use Xploro\App\Controllers\Controller;
use Xploro\Domain\Projects\Models\Project;

class DashboardController extends Controller
{
    /**
     * Show the tenant's application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::limit(3)->get();

        return view('tenant.dashboard.index', compact('projects'));
    }
}
