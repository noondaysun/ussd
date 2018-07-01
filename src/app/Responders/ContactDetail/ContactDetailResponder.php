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
     * @param Collection|ContactDetail $contactDetails
     * @return object
     */
    public function send($contactDetail)
    {
        return response()->json($contactDetail->toArray(), Response::HTTP_OK);
    }
}