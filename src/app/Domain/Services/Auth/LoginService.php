<?php

namespace App\Domain\Services\Auth;

use Illuminate\Http\Request;
use Laravail\Adr\Core\Service;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginService extends Service
{
    use AuthenticatesUsers;

    /**
     * Handle the login request.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request)
    {
        return $this->login($request);
    }

    /**
     * Route to redirect authenticated users to.
     *
     * @return string
     */
    protected function redirectTo()
    {
        return route('dashboard');
    }
}
