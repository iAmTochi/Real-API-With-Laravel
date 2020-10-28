<?php

namespace App;

use App\Scopes\SellerScope;
use Illuminate\Database\Eloquent\Model;

class Seller extends User
{

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new SellerScope);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * a seller has many product to sell
     */
    public function products(){
        return $this->hasMany(Product::class);
    }
}
