<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seller extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_approved',
        'phone',
        'seller_image',
        'nid',
        'nid_file',
        'production_area',
        'business_type',
        'product_description',
        'proof_file',
        'bank_account',
        'bank_name',
        'mobile_wallet',
    ];


    protected $hidden = ['password', 'remember_token'];

    /**
     * A seller can have many products.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
