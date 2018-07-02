<?php

namespace App\Domain\Repositories\Eloquent;

use App\Domain\Entities\ContactDetail;
use Laravail\Adr\Core\Repository;
use App\Domain\Repositories\Contracts\ContactDetailRepository as Contract;

class ContactDetailRepository extends Repository implements Contract
{
    /**
     * Set the repository entity.
     *
     * @return ContactDetail
     */
    public function entity()
    {
        return ContactDetail::class;
    }
    
    /**
     * Persist the user in the db.
     *
     * @param  array
     * @return ContactDetail
     */
    public function create(array $properties)
    {
        return $this->entity->create($properties);
    }
}
