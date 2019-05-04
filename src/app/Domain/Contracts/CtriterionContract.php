<?php

namespace App\Domain\Contracts;

interface CriterionContract
{
    /**
     * Apply the requirements to the entity.
     *
     * @param  object $entity
     */
    public function apply($entity);
}
