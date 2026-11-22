<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'id_users',
        'id_menu',
        'quantity',
        'unit_price',
        'subtotal',
        'discount_percent',
        'discount_amount',
        'total_price',
        'order_date',
        'status'
    ];

    protected function casts(): array
    {
        return [
            'order_date' => 'date',
            'unit_price' => 'decimal:2',
            'subtotal' => 'decimal:2',
            'discount_percent' => 'decimal:2',
            'discount_amount' => 'decimal:2',
            'total_price' => 'decimal:2',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'id_menu');
    }
}
