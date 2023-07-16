<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Question;
use App\Models\Product;
use App\Models\Order;
use App\Models\Payout;
use App\Models\role;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // public $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'seller_since',
        'manager_since',
        'accountant_since',
        'buyer_sice'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @deprecated Use the "casts" property
     *
     * @var array
     */
    protected $dates = [
        'seller_since','supervisor_since','manager_since','accountant_since',
    ];


    public function questions() {
        return $this->belongsToMany(Question::class);
    }


    public function products() {
        return $this->hasMany(Product::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function payouts() {
        return $this->hasMany(Payout::class);
    }

    public function roles() {
        return $this->belongsToMany(role::class);
    }

}
