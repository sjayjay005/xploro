<?php

namespace Xploro\Http\Subscription\Controllers;

use Illuminate\Http\Request;
use Xploro\App\Controllers\Controller;
use Xploro\Domain\Subscriptions\Models\Plan;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plans = Plan::active()->forUsers()->get();

        return view('subscriptions.plans.index', compact('plans'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \Xploro\Domain\Subscriptions\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        return view('subscriptions.plans.show', compact('plan'));
    }
}
