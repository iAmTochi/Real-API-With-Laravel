<?php

namespace App\Transformers;

use App\Seller;
use League\Fractal\TransformerAbstract;

class SellerTransformer extends TransformerAbstract
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
    public function transform(Seller $seller)
    {
        return [
            'identifier'    => (int) $seller->id,
            'name'          => $seller->name,
            'email'         => $seller->email,
            'isVerified'    => $seller->verified,
            'creationDate'  => $seller->created_at,
            'lastChanged'   => $seller->updated_at,
            'deletedDate'   => isset($seller->deleted_at) ? (string)$seller->deleted_at : null,
        ];
    }
}
