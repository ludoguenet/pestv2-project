<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Ebook extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'amount',
    ];

    protected $casts = [
        'amount' => 'float',
    ];
}
