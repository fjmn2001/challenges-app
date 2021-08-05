<?php

declare(strict_types=1);

namespace App\Models;

use App\Observer\ProductCreatedObserver;
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

    protected static function boot(): void
    {
        parent::boot();
        self::observe(ProductCreatedObserver::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function getSubtotalAttribute()
    {
        return $this->quantity * $this->price;
    }
}
