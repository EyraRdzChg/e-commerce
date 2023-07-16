<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Image;
use App\Models\Question;
use App\Models\Category;
use App\Models\User;
use App\Models\Order;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'status',
        'published_at',
        'handling_percentage',
        'reason',
        'category_id',
        'user_id',
    ];

     /**
     * The attributes that should be mutated to dates.
     *
     * @deprecated Use the "casts" property
     *
     * @var array
     */
    protected $dates = [
        'published_at',
    ];

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }


    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
