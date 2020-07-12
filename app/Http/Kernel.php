<?php

namespace Xploro\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \Xploro\Http\Middleware\TrimStrings::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
        \Xploro\Http\Middleware\TrustProxies::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \Xploro\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            // \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Xploro\Http\Middleware\VerifyCsrfToken::class,
            \Xploro\Http\Middleware\Admin\Impersonate::class,
        ],

        'tenant' => [
            \Xploro\Http\Middleware\Tenant\TenantMiddleware::class,
            \Xploro\Http\Middleware\Tenant\TenantConfigMiddleware::class,
        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \Xploro\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'confirmation_token.expired' => \Xploro\Http\Middleware\ChecksExpiredConfirmationTokens::class,
        'role' => \Xploro\Http\Middleware\AbortIfHasNoRole::class,
        'permission' => \Xploro\Http\Middleware\AbortIfHasNoPermission::class,
        'auth.register' => \Xploro\Http\Middleware\AuthenticateRegister::class,
        'subscription.active' => \Xploro\Http\Middleware\Subscription\RedirectIfNotActive::class,
        'subscription.notcancelled' => \Xploro\Http\Middleware\Subscription\RedirectIfCancelled::class,
        'subscription.cancelled' => \Xploro\Http\Middleware\Subscription\RedirectIfNotCancelled::class,
        'subscription.customer' => \Xploro\Http\Middleware\Subscription\RedirectIfNotCustomer::class,
        'subscription.inactive' => \Xploro\Http\Middleware\Subscription\RedirectIfNotInactive::class,
        'subscription.team' => \Xploro\Http\Middleware\Subscription\RedirectIfNoTeamPlan::class,
        'subscription.owner' => \Xploro\Http\Middleware\Subscription\RedirectIfNotSubscriptionOwner::class,
    ];
}
