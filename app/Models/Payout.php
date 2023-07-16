<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Order;
use App\Models\User;

class Payout extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'amount',
        'delivered_at',
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
        'delivered_at',
    ];



    // public function payoutable() {
    //     return $this->morphTo();
    // }

    // public function orders() {
    //     return $this->morphToMany(Order::class, 'orderable'); # ->withPivot('quantity'); # Un Payout tiene varias Orders relacionadas, pero sin una cantidad en específico.
    // }

    public function orders() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
