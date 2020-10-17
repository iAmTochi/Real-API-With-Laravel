<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends User
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * a seller has many product to sell
     */
    public function products(){
        return $this->hasMany(Product::class);
    }
}
