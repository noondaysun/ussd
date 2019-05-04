<?php

namespace App\Responders\Account;

use Illuminate\Http\Response;
use Laravail\Adr\Core\Responder;

class SettingEditResponder extends Responder
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
        $user = $this->payload->getData();

        return request()->wantsJson() ?
            response()->json(compact('user'), Response::HTTP_OK) :
            $this->view->make('account.settings-edit', compact('user'));
    }
}
