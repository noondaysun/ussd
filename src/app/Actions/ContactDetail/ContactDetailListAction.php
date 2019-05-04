<?php

namespace App\Actions\ContactDetail;

use App\Domain\Entities\ContactDetail;
use App\Responders\ContactDetail\ContactDetailResponder;
use Laravail\Adr\Core\Action;

class ContactDetailListAction extends Action
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
     * @return ContactDetailResponder
     */
    public function __invoke()
    {
        return $this->responder->send((new ContactDetail())->all(), 'list');
    }
}