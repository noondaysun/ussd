<?php 
declare(strict_types=1);
namespace App\Responders\User;

use App\Domain\Entities\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Response;

class UserResponder
{
    /**
     * Send the response from API
     * 
     * @param Collection|User $user
     * @return object
     */
    public function send($user)
    {
        return response()->json($user->toArray(), Response::HTTP_OK);
    }
}