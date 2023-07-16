<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;//, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'status',
    ];

    // public function products() { // Se indica que una Category puede tener un conjunto de Products
    //     return $this->morphMany(Product::class, 'productable');
    // }

    public function products() {
        return $this->hasMany(Product::class);
    }
}
