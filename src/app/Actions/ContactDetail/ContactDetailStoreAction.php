<?php

namespace App\Actions\ContactDetail;

use App\Responders\ContactDetail\ContactDetailResponder;
use Illuminate\Http\Request;

class ContactDetailStoreAction
{
    /**
     * Instance of the Responder property.
     *
     * @var ContactDetailResponder
     */
    protected $responder;

    /**
     * Instantiate the class.
     *
     * @param ContactDetailResponder
     */
    public function __construct(ContactDetailResponder $responder)
    {
        $this->responder = $responder;
    }
    
    /**
     * Invoke our action, handle domain, respond.
     *
     * @param Request $request
     * @return ContactDetailResponder
     */
    public function __invoke(Request $request)
    {
        dd($request);
        return $this->responder->send((new ContactDetail())->all());
    }
}
