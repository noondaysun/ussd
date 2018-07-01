<?php

namespace App\Domain\Repositories\Eloquent;

use App\Domain\Entities\ContactDetails;
use Laravail\Adr\Core\Repository;
use App\Domain\Repositories\Contracts\ContactDetailsRepository as Contract;

class ContactDetailsRepository extends Repository implements Contract
{
    /**
     * Set the repository entity.
     *
     * @return \App\Domain\Entities\ContactDetails
     */
    public function entity()
    {
        return ContactDetails::class;
    }
    
    /**
     * Persist the user in the db.
     *
     * @param  array
     * @return \App\Domain\Entities\ContactDetails
     */
    public function create(array $properties)
    {
        return $this->entity->create($properties);
    }
}
