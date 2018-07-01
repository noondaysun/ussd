<?php

namespace App\Domain\Traits\Eloquent;

use Illuminate\Database\Eloquent\Builder;

trait HasLive
{
    /**
     * Apply the Live local scope.
     *
     * @param  \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLive(Builder $builder)
    {
        return $builder->where('live', true);
    }
}
