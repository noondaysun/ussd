<?php

namespace App\Domain\Repositories\Criteria;

use Laravail\Adr\Contracts\CriterionContract;

class IsLive implements CriterionContract
{
    /**
     * Apply the requirements to the entity.
     *
     * @param  object $entity
     * @return object
     */
    public function apply($entity)
    {
        return $entity->live();
    }
}
