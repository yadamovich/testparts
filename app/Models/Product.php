<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
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

    public function getInMoneyFormat($value)
    {
        return '$' . number_format($value, 2, '.', ',');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)->orderBy("created_at");
    }
}
