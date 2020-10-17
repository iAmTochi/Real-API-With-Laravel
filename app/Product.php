<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const AVAILABLE_PRODUCT     = 'available';
    const UNAVAILABLE_PRODUCT   = 'unavailable';
    protected $fillable=[
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];

    public function isAvailable(){
        return $this->status == Product::AVAILABLE_PRODUCT;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * A Product belongs to a seller
     */
    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * a production has many transactions
     */
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }


}
