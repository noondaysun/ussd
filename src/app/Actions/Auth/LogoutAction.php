<?php

namespace App\Actions\Auth;

use Laravail\Adr\Core\Action;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutAction extends Action
{
    /**
     * Invoke our action, handle domain, respond.
     *
     * No need for a responder here, just kill
     * the seesion and redirect.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->invalidate();

        return redirect(route('homepage'));
    }
}
