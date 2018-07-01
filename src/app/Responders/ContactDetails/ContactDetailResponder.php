<?php 
declare(strict_types=1);
namespace App\Responders\ContactDetails;

use App\ContactDetails;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

class ContactDetailResponder
{
    /**
     * Send the response from API
     * 
     * @param Collection|ContactDetails $contactDetails
     * @return object
     */
    public function send($contactDetails)
    {
        return response()->json($contactDetails->toArray(), Response::HTTP_OK);
    }
}