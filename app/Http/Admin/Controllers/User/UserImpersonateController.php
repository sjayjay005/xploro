<?php

namespace Xploro\Http\Admin\Controllers\User;

use Illuminate\Http\Request;
use Xploro\App\Controllers\Controller;
use Xploro\Domain\Admin\Requests\ImpersonateStartRequest;
use Xploro\Domain\Users\Models\User;

class UserImpersonateController extends Controller
{
    /**
     * Show impersonation form.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.impersonate.index');
    }

    /**
     * Setup and start user impersonation.
     *
     * @param ImpersonateStartRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImpersonateStartRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        session()->put('impersonate', $user->id);

        return redirect()->route('account.dashboard')
            ->withSuccess("You are now impersonating {$user->name}");
    }

    /**
     * Setup and start user impersonation.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        session()->forget('impersonate');

        return redirect()->route('account.dashboard');
    }
}
