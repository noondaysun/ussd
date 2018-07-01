<?php

namespace App\Responders\Auth;

use Laravail\Adr\Core\Responder;

class PasswordResponder extends Responder
{
    /**
     * Show the forgot password form.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
        return $this->view->make('auth.passwords.email');
    }
}
