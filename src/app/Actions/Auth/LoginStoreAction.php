<?php

namespace App\Actions\Auth;

use Laravail\Adr\Core\Action;
use Illuminate\Http\Request;
use App\Domain\Services\Auth\LoginService;

class LoginStoreAction extends Action
{
    /**
     * Service property for contacting the domain.
     *
     * @var \App\Domain\Services\LoginService
     */
    protected $service;

    /**
     * Instantiate the class.
     *
     * @param \App\Domain\Services\LoginService
     */
    public function __construct(LoginService $service)
    {
        $this->service = $service;
    }

    /**
     * Invoke our action, handle domain, respond.
     *
     * Login returns a redirect response.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return $this->service->handle($request);
    }
}
