<?php

namespace App\Actions\Auth;

use Laravail\Adr\Core\Action;
use App\Responders\Auth\RegisterShowResponder;

class RegisterShowAction extends Action
{
    /**
     * Instance of the Responder property.
     *
     * @var \App\Responders\Auth\RegisterShowResponder
     */
    protected $responder;

    /**
     * Instantiate the class.
     *
     * @param \App\Responders\Auth\RegisterShowResponder
     */
    public function __construct(RegisterShowResponder $responder)
    {
        $this->responder = $responder;
    }

    /**
     * Invoke our action, handle domain, respond.
     *
     * @return \App\Responders\Auth\RegisterShowResponder
     */
    public function __invoke()
    {
        return $this->responder->send();
    }
}
