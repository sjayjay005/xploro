<?php

namespace Xploro\Http\Account\Controllers\Subscription;

use Xploro\Domain\Account\Requests\SubscriptionTeamUpdateRequest;
use Xploro\Domain\Teams\Models\Team;
use Illuminate\Http\Request;
use Xploro\App\Controllers\Controller;

class SubscriptionTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $team = $request->user()->team;

        return view('account.subscription.team.index', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SubscriptionTeamUpdateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(SubscriptionTeamUpdateRequest $request)
    {
        $request->user()->team->update($request->only(['name']));

        //TODO: Send users an email that their team details have been changed.

        return redirect()->back()
            ->withSuccess('Team name updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Xploro\Domain\Teams\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //
    }
}
