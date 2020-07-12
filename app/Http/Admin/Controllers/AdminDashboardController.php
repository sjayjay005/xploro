<?php

namespace Xploro\Http\Admin\Controllers;

use Illuminate\Http\Request;
use Xploro\App\Controllers\Controller;

class AdminDashboardController extends Controller
{
    /**
     * Display admin dashboard view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
