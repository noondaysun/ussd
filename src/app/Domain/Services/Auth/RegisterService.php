<?php

namespace App\Domain\Services\Auth;

use Illuminate\Http\Request;
use Laravail\Adr\Core\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;
use App\Domain\Repositories\Contracts\UserRepository;

class RegisterService extends Service
{
    /**
     * Use repository.
     *
     * @var \App\Domain\Repositories\Contracts\UserRepository
     */
    protected $users;

    /**
     * Instantiate the class.
     *
     * @param \App\Domain\Repositories\Contracts\UserRepository
     */
    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function handle(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        event(new Registered($user = $this->users->create($request->all())));

        Auth::guard()->login($user);

        return redirect($this->redirectTo());
    }

    /**
     * Route to redirect authenticated users to.
     *
     * @return string
     */
    protected function redirectTo()
    {
        return route('login.show');
    }
}
