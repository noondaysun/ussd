<?php

namespace App\Actions\Auth;

use Laravail\Adr\Core\Action;
use Illuminate\Http\Request;
use App\Domain\Services\Auth\RegisterService;

class RegisterStoreAction extends Action
{
    /**
     * Service property for contacting the domain.
     *
     * @var \App\Domain\Services\RegisterService
     */
    protected $service;

    /**
     * Instantiate the class.
     *
     * @param \App\Domain\Services\RegisterService
     */
    public function __construct(RegisterService $service)
    {
        $this->service = $service;
    }

    /**
     * Invoke our action, handle domain, respond.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        return $this->service->handle($request);
    }
}
