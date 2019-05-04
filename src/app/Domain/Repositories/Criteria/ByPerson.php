<?php

namespace App\Domain\Repositories\Criteria;

use Laravail\Adr\Contracts\CriterionContract;

class ByPerson implements CriterionContract
{
    /**
     * Id of the given person.
     *
     * @var integer
     */
    protected $person;

    /**
     * Instantiate the class.
     *
     * @param integer $id
     */
    public function __construct($id)
    {
        $this->person = $id;
    }

    /**
     * Apply the requirements to the entity.
     *
     * @param  object $entity
     * @return object
     */
    public function apply($entity)
    {
        return $entity->where('person_id', $this->user);
    }
}
