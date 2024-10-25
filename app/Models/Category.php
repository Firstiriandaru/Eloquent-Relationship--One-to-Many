<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_active'
    ];

    protected $casts =[
        'is_active' => 'boolean'
    ];

    //satu kategori mempunyai banyak produk
    public function products(){
        return $this->hasMany(Product::class);
    }
}
