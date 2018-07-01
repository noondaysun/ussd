<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'first_name', 'middle_name', 'surname',
    ];
    
    /**
     * One to one relationship between people and user
     * @return User
     */
    public function users(): User
    {
        return $this->hasOne('App\User');
    }
    
    /**
     * One to many relationship with ContactDetails table
     * @return ContactDetails
     */
    public function contactDetails(): ContactDetails
    {
        return $this->hasMany('App\ContactDetails');
    }
}
