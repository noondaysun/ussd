<?php 
declare(strict_types=1);
namespace App\Responders\Person;

use App\Domain\Entities\Person;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

class PersonResponder
{
    /**
     * Send the response from API
     * 
     * @param Collection|Person $person
     * @return object
     */
    public function send($person)
    {
        return response()->json($person->toArray(), Response::HTTP_OK);
    }
}