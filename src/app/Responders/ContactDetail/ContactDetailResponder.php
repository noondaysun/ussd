<?php 
declare(strict_types=1);
namespace App\Responders\ContactDetail;

use App\Domain\Entities\ContactDetail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

class ContactDetailResponder
{
    /**
     * Send the response from API
     * 
     * @param Collection|ContactDetail $contactDetail
     * @param string $viewName - which view do we render
     * @return object
     */
    public function send($contactDetail, string $viewName = null)
    {
        return request()->wantsJson() ?
            response()->json($contactDetail->toArray(), Response::HTTP_OK) :
            $this->view->make('contact_details.' . $viewName);
    }
}