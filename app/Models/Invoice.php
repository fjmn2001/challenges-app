<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Invoice extends Model
{
    protected $fillable = [
        'date',
        'user_id',
        'seller_id',
        'type'
    ];
    protected $casts = [
        'date' => 'datetime',
        'user_id' => 'integer',
        'seller_id' => 'integer',
        'type' => 'string'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
