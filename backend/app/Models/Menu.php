<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menu';
    protected $fillable = [
        'name',
        'price',
        'image'
    ];

    public static function getMenu()
    {
        return Menu::all();
    }

    public function menus()
    {
        return $this->hasMany(Order::class, 'id_menu');
    }
}
