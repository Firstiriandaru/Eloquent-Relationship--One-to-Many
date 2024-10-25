<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'category_id',
        'description',
        'retail_price',
        'wholesale_price',
        'min_wholesale_qty',
        'quantity',
        'photo'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
