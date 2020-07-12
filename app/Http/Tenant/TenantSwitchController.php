<?php

namespace Xploro\Http\Tenant;

use Illuminate\Http\Request;
use Xploro\App\Controllers\Controller;
use Xploro\Domain\Company\Events\CompanyUserLogin;
use Xploro\Domain\Company\Models\Company;

class TenantSwitchController extends Controller
{
    /**
     * Switch tenant.
     *
     * @param Company $company
     * @return \Illuminate\Http\Response
     */
    public function switch(Company $company)
    {
        event(new CompanyUserLogin(
            request()->user(),
            $company
        ));

        return redirect()->route('tenant.dashboard');
    }
}
