<?php

namespace App\Actions\Auth;

use Laravail\Adr\Core\Action;
use Illuminate\Http\Request;
use App\Domain\Services\Auth\PasswordService;

class PasswordStoreAction extends Action
{
    /**
     * Service property for contacting the domain.
     *
     * @var \App\Domain\Services\Auth\PasswordService
     */
    protected $service;

    public function __construct(PasswordService $service)
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
