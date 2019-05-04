<?php

namespace App\Responders;

use Laravail\Adr\Core\Responder;

class IndexResponder extends Responder
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
        return $this->view->make('landing');
    }
}
