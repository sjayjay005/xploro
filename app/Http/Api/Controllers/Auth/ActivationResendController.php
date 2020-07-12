<?php

namespace Xploro\Http\Api\Controllers\Auth;

use Illuminate\Http\Request;
use Xploro\App\Controllers\Controller;
use Xploro\Domain\Auth\Events\UserRequestedActivationEmail;
use Xploro\Domain\Auth\Requests\ActivateResendRequest;
use Xploro\Domain\Users\Models\User;

class ActivationResendController extends Controller
{

    /**
     * Resend activation link.
     *
     * @param ActivateResendRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActivateResendRequest $request)
    {
        //find user
        $user = User::where('email', $request->email)->first();

        //send activation email
        event(new UserRequestedActivationEmail($user));

        return response()->json(null, 204);
    }
}
