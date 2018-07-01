<?php

namespace App\Actions;

use Laravail\Adr\Core\Action;
use App\Responders\IndexResponder;

final class IndexAction extends Action
{
    /**
     * Instance of the Responder property.
     *
     * @var \App\Responders\IndexResponder
     */
    protected $responder;

    /**
     * Create a new action instance.
     *
     * @param \App\Responders\IndexResponder
     */
    public function __construct(IndexResponder $responder)
    {
        $this->responder = $responder;
    }

    /**
     * Invoke our action, handle domain, respond.
     *
     * @return \App\Responders\IndexResponder
     */
    public function __invoke()
    {
        return $this->responder->send();
    }
}
