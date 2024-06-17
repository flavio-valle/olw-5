<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'sku_id',
        'url',
        'cover'
    ];

    public function sku()
    {
        return $this->belongsTo(Sku::class);
    }
}
