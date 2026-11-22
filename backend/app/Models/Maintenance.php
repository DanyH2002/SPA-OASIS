<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenance';
    protected $fillable = [
        'date',
        'file_path',
        'description'
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
