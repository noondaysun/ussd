<?php

namespace App\Actions\Auth;

use Laravail\Adr\Core\Action;
use App\Responders\Auth\LoginShowResponder;

class LoginShowAction extends Action
{
    /**
     * Instance of the Responder property.
     *
     * @var \App\Responders\Auth\LoginShowResponder
     */
    protected $responder;

    /**
     * Instantiate the class.
     *
     * @param \App\Responders\Auth\LoginShowResponder
     */
    public function __construct(LoginShowResponder $responder)
    {
        $this->responder = $responder;
    }

    /**
     * Invoke our action, handle domain, respond.
     *
     * @return \App\Responders\Auth\LoginShowResponder
     */
    public function __invoke()
    {
        return $this->responder->send();
    }
}
