<?php

namespace App\Domain\Contracts;

interface CriteriaContract
{
    /**
     * Apply criteria to the given entity.
     *
     * @param  array $criteria
     */
    public function withCriteria(...$criteria);
}
