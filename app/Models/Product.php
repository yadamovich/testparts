<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'part_type_id',
        'brand_id'
    ];

    public function partType()
    {
        return $this->belongsTo(PartType::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
