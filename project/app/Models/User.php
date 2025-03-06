<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }
    
    public function company()
    {
        return $this->hasOne(Company::class);
    }
    
    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->where('slug', $role)->count() > 0;
        }
        
        return $role->intersect($this->roles)->count() > 0;
    }
    
    public function assignRole($role)
    {
        if (is_string($role)) {
            $role = Role::where('slug', $role)->firstOrFail();
        }
        
        $this->roles()->syncWithoutDetaching($role);
        
        return $this;
    }
}