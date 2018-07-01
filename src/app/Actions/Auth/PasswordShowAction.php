<?php

namespace App\Actions\Auth;

use Laravail\Adr\Core\Action;
use App\Responders\Auth\PasswordResponder;

class PasswordShowAction extends Action
{
    /**
     * Instance of the Responder property.
     *
     * @var \App\Responders\Auth\PasswordResponder
     */
    protected $responder;

    /**
     * Instantiate the class.
     *
     * @param \App\Responders\Auth\PasswordResponder
     */
    public function __construct(PasswordResponder $responder)
    {
        $this->responder = $responder;
    }

    /**
     * Invoke our action, handle domain, respond.
     *
     * @return \App\Responders\Auth\PasswordResponder
     */
    public function __invoke()
    {
        return $this->responder->send();
    }
}
