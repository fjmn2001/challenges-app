<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'due_date',
        'user_id'
    ];
    protected $casts = [
        'description' => 'string',
        'due_date' => 'datetime',
        'user_id' => 'string'
    ];

    public function logs()
    {
        return $this->hasMany(Log::class);
    }
}
