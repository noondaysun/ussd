<?php

namespace App\Domain\Entities;

use App\Domain\Traits\Eloquent\HasLive;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasLive;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    /**
     * Get the parent person record
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function person()
    {
        return $this->belongsTo(Person::class);
    }
    
    /**
     * Return an array with added person record
     *
     * @return array
     */
    public function toArray(): array
    {
        return array_merge(parent::toArray(), ['person' => $this->person()]);
    }
}
