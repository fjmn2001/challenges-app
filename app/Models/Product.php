<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Product extends Model
{
    protected $fillable = [
        'name',
        'quantity',
        'price'
    ];
    protected $casts = [
        'name' => 'string',
        'quantity' => 'float',
        'price' => 'float'
    ];

    public function getSubtotalAttribute()
    {
        return $this->quantity * $this->price;
    }
}
