<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'first_name', 'middle_name', 'surname',
    ];
    
    /**
     * get the child contact_details records
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactDetails()
    {
        return $this->hasMany(ContactDetail::class);
    }
    
    /**
     * get the child user records
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    /**
     * Return an array with added child record(s)
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_merge(
            parent::toArray(),
            ['contact_details' => $this->contactDetails],
            ['users' => $this->users]
        );
    }
}
