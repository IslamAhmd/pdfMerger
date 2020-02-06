<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


     public function hasRole($roles)
    {
            if (is_string($roles)) {
                return $this->roles->contains('name', $roles);
            }

            if ($roles instanceof Role) {
                return $this->roles->contains('id', $roles->id);
            }

            if (is_array($roles)) {
                foreach ($roles as $role) {
                    if ($this->hasRole($role)) {
                        return true;
                    }
                }

                return false;
            }

            return (bool) $roles->intersect($this->roles)->count();
    }
}
