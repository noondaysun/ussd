<?php

namespace App\Actions\Account;

use Laravail\Adr\Core\Action;
use Illuminate\Http\Request;
use App\Domain\Services\Account\SettingService;
use App\Responders\Account\SettingEditResponder;

class SettingEditAction extends Action
{
    /**
     * Instance of the Responder property.
     *
     * @var \App\Responders\Account\SettingEditResponder
     */
    protected $responder;

    /**
     * Instance of the Service property.
     *
     * @var \App\Domain\Services\Account\SettingService
     */
    protected $service;

    /**
     * Create a new action instance.
     *
     * @param \App\Responders\Account\SettingEditResponder
     * @param \App\Domain\Services\Account\SettingService
     */
    public function __construct(SettingEditResponder $responder, SettingService $service)
    {
        $this->responder = $responder;
        $this->service   = $service;
    }

    /**
     * Invoke our action, handle domain.
     *
     * @param  \Illuminate\Http\Request
     * @return \App\Responders\Account\SettingEditResponder
     */
    public function __invoke(Request $request)
    {
        return $this->responder->make(
            $this->service->edit($request->user())
        )->send();
    }
}
