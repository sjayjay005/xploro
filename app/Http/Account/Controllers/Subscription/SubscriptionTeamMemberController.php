<?php

namespace Xploro\Http\Account\Controllers\Subscription;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Xploro\App\Controllers\Controller;
use Xploro\Domain\Account\Requests\SubscriptionTeamMemberStoreRequest;
use Xploro\Domain\Teams\Mail\TeamMemberAdded;
use Xploro\Domain\Teams\Mail\TeamMemberDeleted;
use Xploro\Domain\Users\Models\User;

class SubscriptionTeamMemberController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param SubscriptionTeamMemberStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriptionTeamMemberStoreRequest $request)
    {
        if ($request->user()->teamLimitReached()) {
            return back()->withError('You have reached the team limit for your plan.');
        }

        // team
        $team = $request->user()->team;

        // new member
        $member = User::where('email', $request->email)->first();

        $team->users()->syncWithoutDetaching([
            $member->id
        ]);

        // send email to member
        Mail::to($member)->send(new TeamMemberAdded($member, $team));

        return back()->withSuccess('Team member added.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {
        // team
        $team = $request->user()->team;

        // detach user
        $team->users()->detach($user->id);

        // send mail to removed user
        Mail::to($user)->send(new TeamMemberDeleted($user, $team));

        return back()->withSuccess('Member has been removed.');
    }
}
