<?php

namespace App\Responders\Auth;

use Laravail\Adr\Core\Responder;

class RegisterShowResponder extends Responder
{
    /**
     * Show the application's registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
        return $this->view->make('auth.register');
    }
}
