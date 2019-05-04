<?php

namespace App\Responders\Auth;

use Illuminate\Http\Request;
use Laravail\Adr\Core\Responder;

class ResetResponder extends Responder
{
    /**
     * Show the password reset form.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request = null, $token = null)
    {
        return $this->view->make('auth.passwords.reset')->with([
            'token' => $token,
            'email' => $request->email
        ]);
    }
}
