<?php

namespace Xploro\Http\Api\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Xploro\App\Controllers\Controller;
use Xploro\Domain\Account\Mail\PasswordUpdated;
use Xploro\Domain\Account\Requests\PasswordStoreRequest;

class PasswordController extends Controller
{

    /**
     * Store user's new password in storage.
     *
     * @param PasswordStoreRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PasswordStoreRequest $request)
    {
        //update user password
        $request->user()->update(['password' => bcrypt($request->password)]);

        //Send email
        Mail::to($request->user())->send(new PasswordUpdated());

        //return with no content
        return response()->json(null, 204);
    }
}
