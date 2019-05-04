<?php

namespace App\Actions\Auth;

use Laravail\Adr\Core\Action;
use Illuminate\Http\Request;
use App\Responders\Auth\ResetResponder;
use App\Domain\Services\Auth\ResetService;

class ResetShowAction extends Action
{
    /**
     * Instance of the Responder property.
     *
     * @var \App\Responders\Auth\LoginShowResponder
     */
    protected $responder;

    /**
     * Instance of the ResetService.
     *
     * @var \App\Domain\Services\Auth\ResetService
     */
    protected $service;

    /**
     * Instantiate the class.
     *
     * @param \App\Responders\Auth\ResetResponder
     */
    public function __construct(ResetResponder $responder, ResetService $service)
    {
        $this->responder = $responder;
        $this->service   = $service;
    }

    /**
     * Invoke our action, handle domain, respond.
     *
     * @param  \Illuminate\Http\Request
     * @param  string  $token
     * @return \App\Responders\Auth\ResetResponder
     */
    public function __invoke(Request $request, $token = null)
    {
        return $this->responder->send($request, $token);
    }
}
