<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable = [
        'id_users',
        'id_therapist',
        'id_services',
        'date',
        'subtotal',
        'discount_percent',
        'discount_amount',
        'total_price',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function therapist()
    {
        return $this->belongsTo(User::class, 'id_therapist');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'id_services');
    }

    protected function casts(): array
    {
        return [
            'date' => 'datetime',
            'subtotal' => 'decimal:2',
            'discount_percent' => 'decimal:2',
            'discount_amount' => 'decimal:2',
            'total_price' => 'decimal:2',
        ];
    }
}
