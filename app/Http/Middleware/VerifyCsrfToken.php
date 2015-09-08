<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'mandrill-web-hook'
    ];

    protected function tokensMatch($request)
    {
        if ($request->wantsJson()) {
            return true;
        }
        return parent::tokensMatch($request);
    }

}
