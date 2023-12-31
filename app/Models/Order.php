<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\Payout;
use App\Models\User;

class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'payment_type',
        'payment_proof',
        'rating',
        'placed_at',
        'amount',
        'user_id'
    ];

     /**
     * The attributes that should be mutated to dates.
     *
     * @deprecated Use the "casts" property
     *
     * @var array
     */
    protected $dates = [
        'placed_at'
    ];


    // public function products() { // Order pertenece o a Products...
    //     return $this->morphedByMany(Product::class, 'orderable')->withPivot('quantity');
    // }

    // public function payouts() { // ...o a Payouts
    //     return $this->morphedByMany(Payout::class, 'orderable'); # ->withPivot('quantity'); # ¿?
    // }

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function payouts() {
        return $this->belongsToMany(Payout::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
