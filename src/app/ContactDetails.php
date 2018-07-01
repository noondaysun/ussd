<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id', 'mobile_telephone', 'house_telephone', 'work_telephone',
        'physical_address', 'postal_address',
    ];
    
    /**
     * Get parent Person record
     * @return Person
     */
    public function person(): Person
    {
        return $this->belongsTo('App\Person');
    }
}
