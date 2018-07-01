<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id',
        'mobile_telephone', 'house_telephone', 'work_telephone',
        'physical_address', 'postal_address',
    ];
    
    /**
     * Get the parent Person record
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function person()
    {
        return $this->belongsTo('Person');
    }
}
