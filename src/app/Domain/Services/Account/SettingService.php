<?php

namespace App\Domain\Services\Account;

use App\Domain\Entities\User;
use Laravail\Adr\Core\Service;
use Laravail\Adr\Payloads\EmptyPayload;
use Laravail\Adr\Payloads\EntityPayload;
use App\Domain\Repositories\Contracts\UserRepository;

class SettingService extends Service
{
    /**
     * Instance of Repository property.
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
     * Handle our request from the action.
     *
     * @param  \App\Domain\Entities\User
     * @return \App\Domain\Contracts\PayloadContract
     */
    public function edit(User $user)
    {
        if ($data = $this->users->find($user->id)) {
            return new EntityPayload($data);
        }

        return new EmptyPayload([]);
    }
}
