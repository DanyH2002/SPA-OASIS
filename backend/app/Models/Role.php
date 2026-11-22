<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'name',
        'discount_percent'
    ];

    public static function getRoles()
    {
        return Role::all();
    }

    public function getDiscountPercent()
    {
        return $this->discount_percent;
    }

    public function roles()
    {
        return $this->hasMany(User::class, 'id_roles');
    }
}
