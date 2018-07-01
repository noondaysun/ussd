<?php

namespace App\Domain\Repositories\Eloquent;

use App\Domain\Entities\Person;
use Laravail\Adr\Core\Repository;
use App\Domain\Repositories\Contracts\PersonRepository as Contract;

class PersonRepository extends Repository implements Contract
{
    /**
     * Set the repository entity.
     *
     * @return \App\Domain\Entities\Person
     */
    public function entity()
    {
        return Person::class;
    }
    
    /**
     * Persist the user in the db.
     *
     * @param  array
     * @return \App\Domain\Entities\Person
     */
    public function create(array $properties)
    {
        return $this->entity->create($properties);
    }
}
