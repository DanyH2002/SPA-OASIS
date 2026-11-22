<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = 'inventory';
    protected $fillable = [
        'name',
        'quantity',
        'minimun_quantity',
        'unit_price',
        'type',
        'purchase_date',
        'active'
    ];

    public static function getInventoryByType($type)
    {
        return self::where('type', $type)->get();
    }

    public static function getInventory()
    {
        return Inventory::all();
    }

    protected function casts(): array
    {
        return [
            'purchase_date' => 'date',
            'active' => 'boolean',
        ];
    }

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
}
