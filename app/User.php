<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    public function roles()
    {
   return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }
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

    public function hasAnyRoles($roles){
        if(is_array($roles)) {
            foreach ($roles as $role)
            {
                if ($this->hasRoleS($roles)) {
                    return true;
                }

            }
            }
            else {
                if ($this->hasRoleS($roles)) {
                    return true;
                }
            }
                return false;
            }

            public function hasRole($role)
            {
                if($this->roles()->where('name', $role)->first())
                {
                    return true;
                }
                else{
                    return false;
                }
            }
}
