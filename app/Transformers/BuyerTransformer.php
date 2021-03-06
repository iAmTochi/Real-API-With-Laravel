<?php

namespace App\Transformers;

use App\Buyer;
use League\Fractal\TransformerAbstract;

class BuyerTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Buyer $buyer)
    {
        return [
            'identifier'    => (int) $buyer->id,
            'full_name'     => (string)$buyer->name,
            'email'         => (string)$buyer->email,
            'isVerified'    => (int)$buyer->verified,
            'creationDate'  => (string)$buyer->created_at,
            'lastChanged'   => (string)$buyer->updated_at,
            'deletedDate'   => isset($buyer->deleted_at) ? (string)$buyer->deleted_at : null,

            'links' => [
                [
                    'rel'   => 'self',
                    'href'  => route('buyers.show', $buyer->id),
                ],
                [
                    'rel'   => 'buyer.categories',
                    'href'  => route('buyers.categories.index', $buyer->id),
                ],
                [
                    'rel'   => 'buyer.products',
                    'href'  => route('buyers.products.index', $buyer->id),
                ],
                [
                    'rel'   => 'buyer.sellers',
                    'href'  => route('buyers.sellers.index', $buyer->id),
                ],
                [
                    'rel'   => 'buyer.transactions',
                    'href'  => route('buyers.transactions.index', $buyer->id),
                ],
                [
                    'rel'   => 'buyer profile',
                    'href'  => route('buyers.show', $buyer->id),
                ],
            ]
        ];
    }

    public static function originalAttribute($index){
        $attributes = [
            'identifier'    => 'id',
            'full_name'     => 'name',
            'email'         => 'email',
            'isVerified'    => 'verified',
            'creationDate'  => 'created_at',
            'lastChanged'   => 'updated_at',
            'deletedDate'   => 'deleted_at)',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }


    public static function transformedAttribute($index){
        $attributes = [
            'id'            =>'identifier'  ,
            'name'          =>'full_name'   ,
            'email'         =>'email'       ,
            'verified'      =>'isVerified'  ,
            'created_at'    =>'creationDate',
            'updated_at'    =>'lastChanged' ,
            'deleted_at'    =>'deletedDate',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
