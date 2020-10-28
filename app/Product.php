<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    const AVAILABLE_PRODUCT     = 'available';
    const UNAVAILABLE_PRODUCT   = 'unavailable';

    protected $dates = ['deleted_at'];
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
     * A Product belongs to a sellers
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
