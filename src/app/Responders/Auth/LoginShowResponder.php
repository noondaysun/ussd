<?php

namespace App\Responders\Auth;

use Laravail\Adr\Core\Responder;

class LoginShowResponder extends Responder
{
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
        return $this->view->make('auth.login');
    }
}
