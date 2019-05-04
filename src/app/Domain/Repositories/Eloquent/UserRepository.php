<?php

namespace App\Domain\Repositories\Eloquent;

use App\Domain\Entities\User;
use Laravail\Adr\Core\Repository;
use App\Domain\Repositories\Contracts\UserRepository as Contract;

class UserRepository extends Repository implements Contract
{
    /**
     * Set the repository entity.
     *
     * @return \App\Domain\Entities\User
     */
    public function entity()
    {
        return User::class;
    }

    /**
     * Persist the user in the db.
     *
     * @param  array
     * @return \App\Domain\Entities\User
     */
    public function create(array $properties)
    {
        $properties['password'] = bcrypt($properties['password']);

        return $this->entity->create($properties);
    }
}
