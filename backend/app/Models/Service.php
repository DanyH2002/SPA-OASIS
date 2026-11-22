<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'status'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'id_services');
    }

    public static function getServices()
    {
        return Service::all();
    }
}
